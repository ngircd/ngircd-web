# ngIRCd Homepage

This is the *homepage* of ngIRCd, a free, portable and lightweight Internet
Relay Chat (IRC) server for small or private networks.

The homepage itself can be found on <https://ngircd.barton.de>.

This source code is available on
[GitHub](https://github.com/ngircd/ngircd-web).

## Building the Manual Pages

Use `pandoc` like this:

```bash
pandoc -s -f man -t html -o ngircd.conf.5.html ../ngIRCd.git/man/ngircd.conf.5
pandoc -s -f man -t html -o man/ngircd.8.html ../ngIRCd.git/man/ngircd.8
```

Don't forget to add the updates HTML files to the Git repository!
