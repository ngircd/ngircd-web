#!/bin/sh
#
# Generate the HTML manual pages in static/man/ from the manual page templates
# of an ngIRCd release tag, substituting the paths like the default build does
# (prefix /usr/local, see man/Makefile.am in the ngIRCd sources).
#
# Usage: ./update-manpages.sh [<ngircd-repository> [<release> [<revision>]]]
# Defaults: "../ngIRCd", the release set in config.toml, and its tag
# "rel-<release>". Give another Git revision to generate the pages of a
# release that is not tagged yet.
#

set -eu

cd "$(dirname "$0")"

repo="${1:-../ngIRCd}"
release="${2:-$(sed -n 's/^release = "\(.*\)"$/\1/p' config.toml)}"
rev="${3:-rel-$release}"

if ! command -v pandoc >/dev/null; then
	echo "$0: pandoc not found!" >&2
	exit 1
fi
if ! git -C "$repo" rev-parse --verify --quiet "$rev^{commit}" >/dev/null; then
	echo "$0: revision \"$rev\" not found in \"$repo\"!" >&2
	exit 1
fi

tmp="$(mktemp -d)"
trap 'rm -rf "$tmp"' EXIT

for man in ngircd.8 ngircd.conf.5; do
	git -C "$repo" show "$rev:man/$man.tmpl" | sed \
		-e "s@:SBINDIR:@/usr/local/sbin@" \
		-e "s@:BINDIR:@/usr/local/bin@" \
		-e "s@:ETCDIR:@/usr/local/etc@" \
		>"$tmp/$man"
	pandoc -s -f man -t html -o "static/man/$man.html" "$tmp/$man"
	echo "static/man/$man.html: generated from $rev:man/$man.tmpl."
done
