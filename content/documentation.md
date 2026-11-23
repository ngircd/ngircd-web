+++
title = "Documentation"
+++
{% set src = config.extra.github ~ "/blob/rel-" ~ config.extra.release -%}

## Supported platforms {#platforms}

ngIRCd is mainly being developed and tested on current versions of Linux,
macOS, FreeBSD and OpenBSD.

In addition ngIRCd has been successfully compiled and run on the following
platforms:

- AIX (3.2.5 \[IBM XL C Compiler\])
- A/UX (3.x \[Apple C Compiler, GNU C\])
- [FreeBSD](https://www.freebsd.org) (4.5 and newer on i386, x86_64 \[GNU C\])
- [Haiku](https://www.haiku-os.org/) (on x86_64 \[GNU C\])
- [HP-UX](https://www.hpe.com) (9.10, 10.20, 11.11 on hppa, m68k
  \[HP-UX cc, GNU C\])
- IRIX (6.5 \[SGI MIPSpro C 7.30\])
- [Linux](https://www.linux.com) (2.x and newer; on aarch64, armhf, hppa, i386,
  mipsel, powerpc, x86_64, ... \[GNU C, Clang, PCC & TCC\])
- [macOS](https://www.apple.com/macos) (Darwin) (10.0 and newer on i386,
  powerpc, x86_64 & aarch64 \[GNU C 2.95.x, 3.x, 4.x & Apple Clang\])
- [NetBSD](https://www.netbsd.org/) (1.5.2 and newer on alpha, i386, m68k,
  sparc, x86_64, ... \[GNU C\])
- [OpenBSD](https://www.openbsd.org/) (3.4 and newer on hppa, i386, powerpc,
  x86_64 \[GNU C\])
- Solaris (2.5.1 and newer on i386, sparc \[GNU C\])
- Windows: [Cygwin](https://www.cygwin.com) or
  [WSL](https://learn.microsoft.com/windows/wsl) (GNU C)

As ngIRCd complies with common UNIX standards and uses GNU automake and GNU
autoconf, chances are that it can be ported to or adapted for further UNIXoid
systems.

## Installation {#install}

Building ngIRCd from source on a UNIX-like system with a C compiler and
`make` usually looks like this:

```
tar xJf ngircd-<version>.tar.xz
cd ngircd-<version>
./configure
make
make install
```

This installs the `ngircd` daemon in `/usr/local/sbin`. A configuration file
is optional since ngIRCd 27; if present, it is read from
`/usr/local/etc/ngircd.conf` (see `doc/sample-ngircd.conf` for an example).

To get started, have a look at [QuickStart.md]({{ src }}/doc/QuickStart.md);
[INSTALL.md]({{ src }}/INSTALL.md) has all the details on installing and
upgrading. And [Container.md]({{ src }}/doc/Container.md) describes how to run
ngIRCd in a container using Podman or Docker.

## Documentation {#documentation}

The documentation is included in the source package, in the main directory and
in the `doc` directory. These are the files of the current release:

**Getting started**, for setting up a server:
[QuickStart.md]({{ src }}/doc/QuickStart.md),
[INSTALL.md]({{ src }}/INSTALL.md),
[FAQ.md]({{ src }}/doc/FAQ.md),
[sample-ngircd.conf]({{ src }}/doc/sample-ngircd.conf.tmpl),
[Container.md]({{ src }}/doc/Container.md).

**Manual pages**, listing all command line parameters and configuration
options (also installed with ngIRCd, see `man 8 ngircd` and `man 5 ngircd.conf`):
[ngircd(8)](../man/ngircd.8.html),
[ngircd.conf(5)](../man/ngircd.conf.5.html).

**Reference**, for all the details:
[Commands.txt]({{ src }}/doc/Commands.txt),
[Modes.txt]({{ src }}/doc/Modes.txt),
[Capabilities.txt]({{ src }}/doc/Capabilities.txt),
[Protocol.txt]({{ src }}/doc/Protocol.txt),
[RFC.txt]({{ src }}/doc/RFC.txt),
[Services.txt]({{ src }}/doc/Services.txt),
[PAM.txt]({{ src }}/doc/PAM.txt),
[SSL.md]({{ src }}/doc/SSL.md).

**Project**, its history and license:
[NEWS]({{ src }}/NEWS),
[ChangeLog]({{ src }}/ChangeLog),
[AUTHORS.md]({{ src }}/AUTHORS.md),
[Contributing.txt]({{ src }}/doc/Contributing.txt),
[COPYING]({{ src }}/COPYING).

**Other files**:
[README.md]({{ src }}/README.md),
[Platforms.txt]({{ src }}/doc/Platforms.txt),
[README-AUX.txt]({{ src }}/doc/README-AUX.txt),
[README-BeOS.txt]({{ src }}/doc/README-BeOS.txt) (German),
[README-Interix.txt]({{ src }}/doc/README-Interix.txt),
[Bopm.txt]({{ src }}/doc/Bopm.txt),
[HowToRelease.txt]({{ src }}/doc/HowToRelease.txt).
