+++
title = "ngIRCd – Next Generation IRC Daemon"
+++

ngIRCd is a free, portable and lightweight Internet Relay Chat
([IRC](https://wikipedia.org/wiki/Internet_Relay_Chat)) server for small or
private networks, developed under the GNU General Public License
([GPL](https://github.com/ngircd/ngircd/blob/master/COPYING)).

The server is quite easy to configure and runs as a single-node server or can
be part of a network of ngIRCd servers in a LAN or across the internet. It
optionally supports the IPv6 protocol, SSL/TLS-protected client-server and
server-server links, the Pluggable Authentication Modules (PAM) system for user
authentication, IDENT requests, and character set conversion for legacy
clients.

The name *ngIRCd* stands for *next-generation IRC daemon*, which is a little
bit exaggerated: *lightweight Internet Relay Chat server* most probably would
have been a better name :-)

## Advantages and strengths {#why}

- Well arranged (lean) configuration file.
- Simple to build, install, configure, and maintain.
- Supports IPv6 and SSL.
- Can use PAM for user authentication.
- Lots of popular user and channel modes are implemented.
- Supports "cloaking" of users.
- No problems with servers that have dynamic IP addresses.
- Freely available, modern, portable and tidy C source.
- Wide field of supported platforms, including AIX, A/UX, FreeBSD, Haiku,
  HP-UX, IRIX, Linux, macOS, NetBSD, OpenBSD, Solaris and Windows with WSL or
  Cygwin.
- ngIRCd has been in development for {{ <years /> }} years.

<details>
<summary><code>ngircd --help</code></summary>

```
ngIRCd 28-CHARCONV+IDENT+IPv6+IRCPLUS+PAM+SSL+SYSLOG+TCPWRAP+ZLIB-x86_64/pc/linux-gnu
Copyright (c)2001-2026 Alexander Barton (<alex@barton.de>) and Contributors.
Homepage: <http://ngircd.barton.de/>

This is free software; see the source for copying conditions. There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

  -d, --debug        log extra debug messages
  -f, --config <f>   use file <f> as configuration file
  -n, --nodaemon     don't fork and don't detach from controlling terminal
  -p, --passive      disable automatic connections to other servers
  -t, --configtest   read, validate and display configuration; then exit
  -V, --version      output version information and exit
  -y, --syslog       log to syslog even when running in the foreground (-n)
  -h, --help         display this help and exit
```

</details>

## Simplicity

After installing ngIRCd (which is best done with the package manager of the
operating system or directly from the source code, see
[INSTALL.md](https://github.com/ngircd/ngircd/blob/master/INSTALL.md)) and adjusting the configuration in the
`ngircd.conf` file, the IRC server can be ready for use after just 5 minutes –
only a few lines need to be changed there, the rest is optional and can be used
with the default values.
