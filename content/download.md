+++
title = "Download"
+++

## Source code {#source}

{{ <download_links /> }}

All previous versions, GnuPG signatures of the archives, and test versions from
Git sources (if available) can be downloaded from the
[download directory](https://ngircd.barton.de/pub/ngircd/).

The archives are signed with the GnuPG key of Alexander Barton, key ID
`FE8B05CE1FA6365E`, fingerprint
`5F22 A309 911C 1C6E FA1B 69C1 FE8B 05CE 1FA6 365E`, which is available from
[keys.openpgp.org](https://keys.openpgp.org/vks/v1/by-fingerprint/5F22A309911C1C6EFA1B69C1FE8B05CE1FA6365E).
Verify an archive with its signature like this:

```
gpg --verify ngircd-<version>.tar.xz.sig ngircd-<version>.tar.xz
```

## Packages {#packages}

Precompiled ngIRCd packages are available for the following distributions:

### BSD

- [FreeBSD](https://www.freebsd.org/):
  [Port](https://ports.freebsd.org/cgi/ports.cgi?query=ngircd)
- [NetBSD](https://www.netbsd.org/):
  [pkgsrc](https://pkgsrc.se/search.php?so=ngircd)
- [OpenBSD](https://www.openbsd.org/):
  [Port](https://openports.pl/path/net/ngircd)

### Linux

- [Debian Linux](https://www.debian.org/):
  [deb](https://packages.debian.org/ngircd)
- [Fedora Linux](https://fedoraproject.org/):
  [rpm](https://packages.fedoraproject.org/pkgs/ngircd/ngircd/)
- [Gentoo Linux](https://www.gentoo.org/):
  [ebuild](https://packages.gentoo.org/package/net-irc/ngircd)
- [OpenSUSE](https://www.opensuse.org/):
  [rpm](https://software.opensuse.org/package/ngircd?search_term=ngircd)
- [OpenWRT](https://openwrt.org/):
  [Package](https://openwrt.org/packages/pkgdata/ngircd)
- [Ubuntu Linux](https://www.ubuntu.com/):
  [deb](https://packages.ubuntu.com/ngircd)

### macOS

- [Homebrew](https://brew.sh/):
  [Formula](https://formulae.brew.sh/formula/ngircd)

### Unofficial packages

- [Arch Linux](https://www.archlinux.org/):
  [AUR](https://aur.archlinux.org/packages?K=ngircd)
- [Debian Linux](https://www.debian.org/):
  [deb](https://debian.barton.de/debian/pool/main/n/ngircd/)
  (author: Alex Barton)

## Git repository {#git}

The source code and all files belonging to ngIRCd are managed by
[Git](https://git-scm.com/) on [GitHub](https://github.com/):
<https://github.com/ngircd>.
