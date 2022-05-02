# Tainá - A beautiful block theme for WordPress digital archives with support for Tainacan

An open source, modern [**block theme**](https://developer.wordpress.org/themes/block-themes/) for your digital expositions that works with [Tainacan](https://tainacan.org/en).

> Tainá is made for museums, libraries and galleries for sharing their stories with the World.

This project aims to implement this _A-M-A-Z-I-N-G_ design by Marcelo Ávila:
[Check Tainá design proposal on Behance](https://www.behance.net/gallery/83704559/Taina-Tema-Wordpress)

It was designed with [Tainacan plugin](https://wordpress.org/plugins/tainacan/) in mind but should be an awesome theme for anyone using WordPress.

## Project development

The idea is to deliver it in three phases:

- [ ] **Version 1.0.0** - A simple, yet beautiful block theme for WordPress, available on the [themes repository](https://wordpress.org/themes/)
- [ ] **Version 2.0.0** - A block theme that offers nice Tainacan templates, fully customizable
- [ ] **Version 3.0.0** - A powerful block theme with some extra options and plugin integrations such as Carousel Banners, Collapsable Search, Sharing, etc. In other words, all the goodies that you can see in the design.

Feel free to contribute with suggestions, pull requests and ideas. We are all new to the block-theme development world here, and we're still trying to learn the best practices. A good way to help is to take a look at our development board: (link missing)

### How to build it

Make the script executable:

```sh
chmod u+x build.sh
```

We use sass to build our css files, so it needs to be compiled. To simply build the necessary `.scss` files into bundled `.css`:

```sh
./build.sh
```

To, besides that, move the necessary theme files to your wordpress theme directory:

```sh
./build.sh /var/www/html/wp-content/theme/
```

If you don't like the script you can bundle things by yourself:

```sh
cd taina
npm install
npm run build
```

But keep in mind that the script also takes care of removing some source files not necessary for the theme to work, such as `.scss` and `.package.json`.

## F.A.Q.

**Will it Work only on latest WordPress versions?**

The idea is to make it compatible with >= 6.0, since we're using the latest features from the block editor.

**What is Tainacan and do I need it to use this theme?**

Tainacan is a plugin that extends WordPress functionalities to create a digital repository management and expositions system. While this theme will have templates dedicated to it, you DO NOT need Tainacan to use it, just keep in mind that some screens in the design proposal are related to its collections and items. If you want more information about Tainacan, here are three golden links:

- [Oficial Site](https://tainacan.org/en)
- [Community Forum](https://tainacan.discourse.group/)
- [Wiki](https://wiki.tainacan.org/)

**What does _Tainá_ stand for?**

While the Tainacan plugin [had its name inspired](https://tainacan.org/en/visual-identity/) by the way that some native people from Brazil call the morning star (Venus), Tainá is a common female name in Brazil, also rooted in indigenous culture.
