# osmo

A minimal web template framework for building websites quickly.

## Features

Beautiful design with light blue gradient theme. Fully responsive, works on all devices. Simple to customize and deploy.

## Project Structure

```
osmo/
├── index.html
├── config.php
├── main.c
├── header.h
├── css/style.css
├── js/script.js
├── Makefile
├── package.json
├── README.md
├── LICENSE
└── .gitignore
```

## Getting Started

Clone the repository:
```
git clone https://github.com/cuttarelison/osmo.git
cd osmo
```

Open in browser:
```
open index.html
```

Or use local server:
```
python -m http.server 8000
```

Then visit http://localhost:8000

## Customization

Edit index.html to change content. Edit css/style.css to modify colors and styles. Replace placeholder text with your own.

## Colors

Primary colors are defined in css/style.css:
- Primary Blue: #E3F2FD
- Accent Blue: #64B5F6
- Dark Blue: #1E88E5
- Text Dark: #1A237E
- Text Light: #455A64

## Build

Compile C code:
```
make
```

Clean build files:
```
make clean
```

## Deploy

GitHub Pages: Create repo yourusername.github.io and push files.

Netlify: Connect GitHub repo, auto-deploys on push.

Vercel: Import GitHub repo, auto-deploys.

## Browser Support

Chrome 90+, Firefox 88+, Safari 14+, Edge 90+

## Technology

HTML5, CSS3, JavaScript, PHP, C

## Author

cuttarelison

## License

MIT License - Free to use and modify

---

Start building. Made simple.
 🚀
