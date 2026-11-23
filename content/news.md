+++
title = "News & History"
+++
{% set src = config.extra.github ~ "/blob/rel-" ~ config.extra.release -%}

Latest news: ngIRCd on [Mastodon](https://social.tchncs.de/@ngircd).

## Status {#status}

The current stable version is **Release {{ <release /> }}**, please refer to the
[Download](../download/) options.

ngIRCd is used as the daemon in real-world in-house and public IRC networks and
included in the package repositories of various operating systems.

<p class="warning"><strong>Caution:</strong> ngIRCd up to and including
release 27 has a bug, which can result in 100% CPU usage on a single core (DoS)
while handling certain malicious connections. <strong>All installations should
be upgraded to ngIRCd 28 (released July 12, 2026) or newer!</strong></p>

## Recent releases {#releases}

- [ngIRCd 28](https://github.com/ngircd/ngircd/releases/tag/rel-28) (2026-07-12)
- [ngIRCd 27](https://github.com/ngircd/ngircd/releases/tag/rel-27) (2024-04-26)
- [ngIRCd 26.1](https://github.com/ngircd/ngircd/releases/tag/rel-26.1) (2021-01-02)
- [ngIRCd 26](https://github.com/ngircd/ngircd/releases/tag/rel-26) (2020-06-20)
- [ngIRCd 25](https://github.com/ngircd/ngircd/releases/tag/rel-25) (2019-01-23)

## History {#history}

Development of ngIRCd started back in 2001: The server has been written from
scratch in C, tries to follow all relevant standards, and is not based on the
forefather, the daemon of the IRCNet.

It is not the goal of ngIRCd to implement all the nasty behaviors of the
original ircd or corner-cases in the RFCs, but to implement most of the useful
commands and semantics that are used by existing clients.

The [NEWS]({{ src }}/NEWS) file and the [ChangeLog]({{ src }}/ChangeLog) are available
online and in the archives.
