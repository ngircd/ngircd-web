+++
title = "Documentation"
+++

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

ngIRCd is designed for UNIXoid systems and the installation on a modern
UNIX-like system, which is supported by GNU automake and GNU autoconf,
shouldn't cause any problems.

Typically it looks like this:

```
tar xzf ngircd-<version>.tar.gz
cd ngircd-<version>
./configure
make
```

Now, the executing server (normally `ngircd`) should be in `src/ngircd`.

```
make install
```

The executing server has now been installed in `/usr/local/sbin`.

The configuration file `ngircd.conf` is now expected in the server directory
`/usr/local/etc`; an exemplary configuration file can be found in the
directory `doc`.

Further comments on the installation and configuration can be found in the
file [INSTALL.md](https://github.com/ngircd/ngircd/blob/master/INSTALL.md).

## Documentation {#documentation}

Documentation is included in the source package, some in the main directory
(such as INSTALL.md, README.md, NEWS and COPYING), and some in the sub
directory `doc` (such as SSL.md, FAQ.md and the exemplary configuration
sample-ngircd.conf).

The documents of the current version can be found online here:

- [README.md](https://github.com/ngircd/ngircd/blob/master/README.md),
  [INSTALL.md](https://github.com/ngircd/ngircd/blob/master/INSTALL.md),
  [QuickStart.md](https://github.com/ngircd/ngircd/blob/master/doc/QuickStart.md),
  [FAQ.md](https://github.com/ngircd/ngircd/blob/master/doc/FAQ.md)
- [sample-ngircd.conf](https://github.com/ngircd/ngircd/blob/master/doc/sample-ngircd.conf.tmpl)
- [NEWS](https://github.com/ngircd/ngircd/blob/master/NEWS),
  [ChangeLog](https://github.com/ngircd/ngircd/blob/master/ChangeLog)
- [AUTHORS.md](https://github.com/ngircd/ngircd/blob/master/AUTHORS.md),
  [CONTRIBUTING.md](https://github.com/ngircd/ngircd/blob/master/CONTRIBUTING.md),
  [COPYING](https://github.com/ngircd/ngircd/blob/master/COPYING)
- [Bopm.txt](https://github.com/ngircd/ngircd/blob/master/doc/Bopm.txt),
  [Capabilities.txt](https://github.com/ngircd/ngircd/blob/master/doc/Capabilities.txt),
  [Commands.txt](https://github.com/ngircd/ngircd/blob/master/doc/Commands.txt),
  [Container.md](https://github.com/ngircd/ngircd/blob/master/doc/Container.md),
  [HowToRelease.txt](https://github.com/ngircd/ngircd/blob/master/doc/HowToRelease.txt),
  [Modes.txt](https://github.com/ngircd/ngircd/blob/master/doc/Modes.txt),
  [PAM.txt](https://github.com/ngircd/ngircd/blob/master/doc/PAM.txt),
  [Platforms.txt](https://github.com/ngircd/ngircd/blob/master/doc/Platforms.txt),
  [Protocol.txt](https://github.com/ngircd/ngircd/blob/master/doc/Protocol.txt),
  [RFC.txt](https://github.com/ngircd/ngircd/blob/master/doc/RFC.txt),
  [Services.txt](https://github.com/ngircd/ngircd/blob/master/doc/Services.txt),
  [SSL.md](https://github.com/ngircd/ngircd/blob/master/doc/SSL.md)
- [README-AUX.txt](https://github.com/ngircd/ngircd/blob/master/doc/README-AUX.txt),
  [README-BeOS.txt](https://github.com/ngircd/ngircd/blob/master/doc/README-BeOS.txt) (German),
  [README-Interix.txt](https://github.com/ngircd/ngircd/blob/master/doc/README-Interix.txt)

## Manual pages {#man}

In addition, ngIRCd comes with two manual pages: `ngircd(8)` (for the daemon)
and `ngircd.conf(5)` (for its configuration file). They have even more details
and list all possible command line parameters and configuration options. You
can read them with the `man` command (when they are installed locally on your
system, e.g. `man 8 ngircd` and `man 5 ngircd.conf`) or online here:

- Daemon: [ngircd(8)](/man/ngircd.8.html)
- Configuration file: [ngircd.conf(5)](/man/ngircd.conf.5.html)
