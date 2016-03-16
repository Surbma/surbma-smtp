=== Surbma - SMTP ===
Contributors: Surbma
Donate link: http://surbma.com/wordpress-plugins/
Tags: smtp, email, multisite, mailgun, sendgrid, mandrill, amazon ses, ses
Requires at least: 4.0
Tested up to: 4.4
Stable tag: 1.0.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

External SMTP mail configuration via global variables in wp-config.php.

== Description ==

This plugin is created especially for Multisite Networks. You can define all variables in the wp-config.php file and it will be valid for all sites in a Multisite. So this is not for a site-by-site configuration plugin. You can install it on a single WordPress install also and it will work perfectly. But if you install it in a Multisite Network, you can only network activate it!

This plugin is working with all SMTP servers and services, like Mailgun, SendGrid, Mandrill, Amazon SES and others.

*Required variables:*

- `SURBMA_SMTP_HOST` - External SMTP server.
- `SURBMA_SMTP_USER` - User for the SMTP account.
- `SURBMA_SMTP_PASSWORD` - Password for the SMTP account.

*More available variables:*

- `SURBMA_SMTP_PORT` - Port number for the SMTP server.
- `SURBMA_SMTP_SECURE` - Choose SSL or TLS, if necessary for your SMTP server.
- `SURBMA_SMTP_FROM` - From email address for all outgoing emails.
- `SURBMA_SMTP_FROMNAME` - From name for all outgoing emails.

*Example configuration:*

```
define('SURBMA_SMTP_HOST','smtp.mailgun.org');
define('SURBMA_SMTP_USER','postmaster@surbma.com');
define('SURBMA_SMTP_PASSWORD','bb2b************************4133');
```

You can put these lines everywhere before the line, that says: "That's It. Pencils down"

**Do you want to contribute or help improving this plugin?**

You can find it on GitHub: [https://github.com/Surbma/surbma-smtp](https://github.com/Surbma/surbma-smtp)

**You can find my other plugins and projects on GitHub:**

[https://github.com/Surbma](https://github.com/Surbma)

Please feel free to contribute, help or recommend any new features for my plugins, themes and other projects.

**Do you want to know more about me?**

Visit my webpage: [Surbma.com](http://surbma.com/)

== Installation ==

1. Upload `surbma-smtp` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - SMTP plugin through the 'Plugins' menu in WordPress
3. Set every global variable in the wp-config.php file.
3. That's it. :)

== Frequently Asked Questions ==

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 1.1.0 =

- Allow only network activation in Multisite Networks.
- Added detailed description.

= 1.0.0 =

- Initial release.
