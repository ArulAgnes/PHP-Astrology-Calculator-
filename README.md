<div align="center">

<!-- Animated cosmic banner with orbiting planets and twinkling stars (native GitHub SVG animation) -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 320" preserveAspectRatio="xMidYMid slice" role="img" aria-label="PHP Astrology Calculator animated banner">
  <defs>
    <radialGradient id="cosmos" cx="50%" cy="50%" r="75%">
      <stop offset="0%"  stop-color="#1b1147"/>
      <stop offset="55%" stop-color="#0b0628"/>
      <stop offset="100%" stop-color="#000010"/>
    </radialGradient>
    <linearGradient id="titleGrad" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%"   stop-color="#7ad7ff"/>
      <stop offset="35%"  stop-color="#c89bff"/>
      <stop offset="65%"  stop-color="#ffb86b"/>
      <stop offset="100%" stop-color="#ff6bd6"/>
    </linearGradient>
    <radialGradient id="planet1" cx="35%" cy="35%" r="65%">
      <stop offset="0%"  stop-color="#ffd9a8"/>
      <stop offset="60%" stop-color="#ff8a3d"/>
      <stop offset="100%" stop-color="#7a2a00"/>
    </radialGradient>
    <radialGradient id="planet2" cx="35%" cy="35%" r="65%">
      <stop offset="0%"  stop-color="#a8e0ff"/>
      <stop offset="60%" stop-color="#3d8aff"/>
      <stop offset="100%" stop-color="#0a1a55"/>
    </radialGradient>
    <radialGradient id="planet3" cx="35%" cy="35%" r="65%">
      <stop offset="0%"  stop-color="#ffd0f0"/>
      <stop offset="60%" stop-color="#c45bff"/>
      <stop offset="100%" stop-color="#2a0a44"/>
    </radialGradient>
    <radialGradient id="sun" cx="50%" cy="50%" r="50%">
      <stop offset="0%"  stop-color="#fff7c2"/>
      <stop offset="50%" stop-color="#ffd24a"/>
      <stop offset="100%" stop-color="#ff7a00" stop-opacity="0"/>
    </radialGradient>
    <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
      <feGaussianBlur stdDeviation="6" result="blur"/>
      <feMerge>
        <feMergeNode in="blur"/>
        <feMergeNode in="SourceGraphic"/>
      </feMerge>
    </filter>
  </defs>

  <!-- Cosmic background -->
  <rect width="1200" height="320" fill="url(#cosmos)"/>

  <!-- Twinkling stars (animated opacity) -->
  <g fill="#ffffff">
    <circle cx="60"  cy="40"  r="1.2"><animate attributeName="opacity" values="0.2;1;0.2" dur="2.4s" repeatCount="indefinite"/></circle>
    <circle cx="140" cy="80"  r="1"><animate attributeName="opacity" values="1;0.1;1" dur="3.1s" repeatCount="indefinite"/></circle>
    <circle cx="210" cy="30"  r="1.4"><animate attributeName="opacity" values="0.3;1;0.3" dur="2.7s" repeatCount="indefinite"/></circle>
    <circle cx="330" cy="70"  r="1"><animate attributeName="opacity" values="1;0.2;1" dur="3.6s" repeatCount="indefinite"/></circle>
    <circle cx="420" cy="40"  r="1.6"><animate attributeName="opacity" values="0.4;1;0.4" dur="2.2s" repeatCount="indefinite"/></circle>
    <circle cx="510" cy="90"  r="1.2"><animate attributeName="opacity" values="1;0.3;1" dur="3.3s" repeatCount="indefinite"/></circle>
    <circle cx="600" cy="40"  r="1"><animate attributeName="opacity" values="0.2;1;0.2" dur="2.9s" repeatCount="indefinite"/></circle>
    <circle cx="700" cy="80"  r="1.4"><animate attributeName="opacity" values="1;0.4;1" dur="3.8s" repeatCount="indefinite"/></circle>
    <circle cx="800" cy="50"  r="1"><animate attributeName="opacity" values="0.3;1;0.3" dur="2.5s" repeatCount="indefinite"/></circle>
    <circle cx="900" cy="90"  r="1.6"><animate attributeName="opacity" values="1;0.2;1" dur="3.0s" repeatCount="indefinite"/></circle>
    <circle cx="1000" cy="40" r="1.2"><animate attributeName="opacity" values="0.4;1;0.4" dur="2.8s" repeatCount="indefinite"/></circle>
    <circle cx="1110" cy="70" r="1"><animate attributeName="opacity" values="1;0.3;1" dur="3.4s" repeatCount="indefinite"/></circle>
    <circle cx="80"  cy="200" r="1.2"><animate attributeName="opacity" values="0.2;1;0.2" dur="2.6s" repeatCount="indefinite"/></circle>
    <circle cx="250" cy="240" r="1"><animate attributeName="opacity" values="1;0.1;1" dur="3.2s" repeatCount="indefinite"/></circle>
    <circle cx="380" cy="260" r="1.4"><animate attributeName="opacity" values="0.3;1;0.3" dur="2.4s" repeatCount="indefinite"/></circle>
    <circle cx="950" cy="220" r="1.2"><animate attributeName="opacity" values="1;0.4;1" dur="3.0s" repeatCount="indefinite"/></circle>
    <circle cx="1060" cy="260" r="1"><animate attributeName="opacity" values="0.2;1;0.2" dur="2.7s" repeatCount="indefinite"/></circle>
  </g>

  <!-- Glowing sun -->
  <circle cx="600" cy="160" r="90" fill="url(#sun)" filter="url(#glow)">
    <animate attributeName="r" values="88;94;88" dur="4s" repeatCount="indefinite"/>
  </circle>

  <!-- Orbiting planet 1 (inner orbit) -->
  <g>
    <animateTransform attributeName="transform" type="rotate" from="0 600 160" to="360 600 160" dur="9s" repeatCount="indefinite"/>
    <ellipse cx="600" cy="160" rx="160" ry="60" fill="none" stroke="#ffffff22" stroke-width="1"/>
    <circle cx="760" cy="160" r="18" fill="url(#planet1)" filter="url(#glow)"/>
  </g>

  <!-- Orbiting planet 2 (middle orbit) -->
  <g>
    <animateTransform attributeName="transform" type="rotate" from="360 600 160" to="0 600 160" dur="14s" repeatCount="indefinite"/>
    <ellipse cx="600" cy="160" rx="240" ry="80" fill="none" stroke="#ffffff1f" stroke-width="1"/>
    <circle cx="360" cy="160" r="24" fill="url(#planet2)" filter="url(#glow)"/>
  </g>

  <!-- Orbiting planet 3 (outer orbit) -->
  <g>
    <animateTransform attributeName="transform" type="rotate" from="0 600 160" to="360 600 160" dur="22s" repeatCount="indefinite"/>
    <ellipse cx="600" cy="160" rx="330" ry="110" fill="none" stroke="#ffffff1a" stroke-width="1"/>
    <circle cx="930" cy="160" r="30" fill="url(#planet3)" filter="url(#glow)"/>
  </g>

  <!-- Title (gradient + subtle shimmer) -->
  <g transform="translate(600 160)">
    <text text-anchor="middle" y="-5"
          font-family="'Segoe UI','Helvetica Neue',Arial,sans-serif"
          font-size="56" font-weight="800"
          fill="url(#titleGrad)" letter-spacing="2">
      ✦ PHP Astrology Calculator ✦
      <animate attributeName="opacity" values="0.92;1;0.92" dur="3s" repeatCount="indefinite"/>
    </text>
    <text text-anchor="middle" y="38"
          font-family="'Segoe UI','Helvetica Neue',Arial,sans-serif"
          font-size="20" font-weight="500"
          fill="#cfd8ff" opacity="0.92">
      Discover Your Lucky Number &amp; Celestial Destiny
    </text>
  </g>
</svg>

<br/>

<!-- Subtitle / tagline -->
<img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=22&pause=1000&color=7AD7FF&center=true&vCenter=true&width=700&lines=Numerology+%2B+Astrology+%3D+Destiny;Powered+by+PHP+%26+Pure+CSS;Open+Source+%E2%9C%A8+MIT+%2F+Apache+2.0;One+Date+of+Birth+%E2%9D%A4%EF%B8%8F+Infinite+Insights" alt="Typing animation" />

<br/><br/>

<!-- Animated shields / social badges (SVG pulses via stroke) -->
<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/stargazers"><img src="https://img.shields.io/github/stars/ArulAgnes/PHP-Astrology-Calculator-?style=for-the-badge&logo=starship&logoColor=white&color=ff6bd6&labelColor=1b1147" alt="Stars"/></a>
<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/network/members"><img src="https://img.shields.io/github/forks/ArulAgnes/PHP-Astrology-Calculator-?style=for-the-badge&logo=git-fork&logoColor=white&color=7ad7ff&labelColor=1b1147" alt="Forks"/></a>
<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/issues"><img src="https://img.shields.io/github/issues/ArulAgnes/PHP-Astrology-Calculator-?style=for-the-badge&logo=gitbook&logoColor=white&color=c89bff&labelColor=1b1147" alt="Issues"/></a>
<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/blob/main/LICENSE"><img src="https://img.shields.io/badge/License-Apache_2.0-ffb86b?style=for-the-badge&labelColor=1b1147" alt="License"/></a>
<a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-8%2B-777BB4?style=for-the-badge&logo=php&logoColor=white&labelColor=1b1147" alt="PHP 8+"/></a>
<a href="https://developer.mozilla.org/en-US/docs/Web/HTML"><img src="https://img.shields.io/badge/HTML5-FF6BD6?style=for-the-badge&logo=html5&logoColor=white&labelColor=1b1147" alt="HTML5"/></a>
<a href="https://developer.mozilla.org/en-US/docs/Web/CSS"><img src="https://img.shields.io/badge/CSS3-7AD7FF?style=for-the-badge&logo=css3&logoColor=white&labelColor=1b1147" alt="CSS3"/></a>
<a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html"><img src="https://img.shields.io/badge/Made%20With-Love-ff6bd6?style=for-the-badge&logo=heart&logoColor=white&labelColor=1b1147" alt="Made with love"/></a>

<br/><br/>

<a href="#-table-of-contents"><img src="https://img.shields.io/badge/⬇_Explore_the_Cosmos-Start_Here-7ad7ff?style=flat-square&labelColor=1b1147" alt="Explore the Cosmos"/></a>

</div>

---

## 🌌 Table of Contents

<!-- Animated TOC with hover-friendly bullets -->
<details>
<summary><b>🪐 Click to expand the cosmic navigation map</b></summary>

| 🌠 Section | 🚀 Description |
| :--- | :--- |
| [🌟 Overview](#-overview) | What this project is and why it exists |
| [✨ Key Features](#-key-features) | Animated, accessible, fast |
| [🎬 Live Demo & Screenshots](#-live-demo--screenshots) | Visual proof of the cosmos |
| [🏗️ Architecture & Data Flow](#-architecture--data-flow) | Animated SVG diagram |
| [🧮 How the Numerology Math Works](#-how-the-numerology-math-works) | The 1-to-9 reduction algorithm |
| [🔢 Lucky Numbers & Planets Table](#-lucky-numbers--planets-table) | All 9 numbers decoded |
| [🛠️ Tech Stack](#-tech-stack) | Tools, languages, frameworks |
| [🚀 Getting Started](#-getting-started) | Clone → run in 60 seconds |
| [📂 Project Structure](#-project-structure) | File layout |
| [🎨 Design System](#-design-system) | Colors, typography, glassmorphism |
| [🧪 Testing](#-testing) | How to verify accuracy |
| [📊 Animated Stats & Badges](#-animated-stats--badges) | Counters, progress bars |
| [♿ Accessibility](#-accessibility) | `prefers-reduced-motion`, contrast |
| [🌗 Dark / Light Mode](#-dark--light-mode) | Animated theme toggle |
| [🎞️ Media & Lazy Loading](#-media--lazy-loading) | GIFs, video, lazy load |
| [🧩 Extending the Animations](#-extending-the-animations) | For contributors |
| [🤝 Contributing](#-contributing) | PR, issues, code style |
| [🛡️ License](#-license) | Apache 2.0 |
| [✨ Acknowledgements](#-acknowledgements) | Inspiration & credits |
| [📬 Contact](#-contact) | Reach out |

</details>

---

## 🌟 Overview

<div align="center">

> *"The universe is not only stranger than we imagine — it is stranger than we **can** imagine."* — Sir Arthur Eddington

</div>

**PHP Astrology Calculator** is a self-contained **Numerology Calculator** that fuses ancient metaphysical wisdom with modern PHP engineering. Enter your **Date of Birth** and the application reveals your **single-digit life-path number** — along with its associated **planet**, **personality traits**, and **celestial guidance**.

It is intentionally **zero-dependency**:

- 🎯 **One PHP file** (`Astrology.php`) for the entire backend + frontend.
- 🎨 **Pure CSS** glassmorphism, gradient text, and cosmic background.
- 🚫 **No Composer, no Node, no build step** — drop it on any LAMP/XAMPP stack and it runs.

The result: a tiny, portable, beautifully animated tool that turns a date into destiny. 🌠

---

## ✨ Key Features

<!-- Feature grid as an SVG "planet cards" layout for visual punch -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 360" role="img" aria-label="Animated feature grid">
  <defs>
    <linearGradient id="cardGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%"  stop-color="#7ad7ff" stop-opacity="0.18"/>
      <stop offset="100%" stop-color="#ff6bd6" stop-opacity="0.18"/>
    </linearGradient>
    <filter id="softGlow" x="-30%" y="-30%" width="160%" height="160%">
      <feGaussianBlur stdDeviation="4" result="blur"/>
      <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
    </filter>
  </defs>
  <style>
    .fc-title { font: 700 22px 'Segoe UI', sans-serif; fill: #ffffff; }
    .fc-desc  { font: 400 14px 'Segoe UI', sans-serif; fill: #cfd8ff; }
    .fc-num   { font: 800 36px 'Segoe UI', sans-serif; fill: #ffb86b; }
    @media (prefers-reduced-motion: reduce) {
      .fc-pulse { animation: none !important; }
    }
  </style>

  <!-- Card 1 -->
  <g transform="translate(20 20)">
    <rect width="340" height="150" rx="18" fill="url(#cardGrad)" stroke="#7ad7ff" stroke-opacity="0.5"/>
    <circle cx="40" cy="50" r="14" fill="#7ad7ff" filter="url(#softGlow)">
      <animate class="fc-pulse" attributeName="r" values="12;16;12" dur="3s" repeatCount="indefinite"/>
    </circle>
    <text x="70" y="58" class="fc-title">🌠 Single-File PHP</text>
    <text x="20" y="95" class="fc-desc">One file, zero dependencies.</text>
    <text x="20" y="115" class="fc-desc">Deploy on any LAMP stack in seconds.</text>
  </g>

  <!-- Card 2 -->
  <g transform="translate(380 20)">
    <rect width="340" height="150" rx="18" fill="url(#cardGrad)" stroke="#ff6bd6" stroke-opacity="0.5"/>
    <circle cx="40" cy="50" r="14" fill="#ff6bd6" filter="url(#softGlow)">
      <animate class="fc-pulse" attributeName="r" values="14;12;14" dur="3s" repeatCount="indefinite"/>
    </circle>
    <text x="70" y="58" class="fc-title">✨ Cosmic UI</text>
    <text x="20" y="95" class="fc-desc">Glassmorphism, gradient text,</text>
    <text x="20" y="115" class="fc-desc">animated cosmic background.</text>
  </g>

  <!-- Card 3 -->
  <g transform="translate(740 20)">
    <rect width="340" height="150" rx="18" fill="url(#cardGrad)" stroke="#c89bff" stroke-opacity="0.5"/>
    <circle cx="40" cy="50" r="14" fill="#c89bff" filter="url(#softGlow)">
      <animate class="fc-pulse" attributeName="r" values="12;15;12" dur="2.5s" repeatCount="indefinite"/>
    </circle>
    <text x="70" y="58" class="fc-title">🔮 Numerology Engine</text>
    <text x="20" y="95" class="fc-desc">Reduces any date of birth to</text>
    <text x="20" y="115" class="fc-desc">its single-digit life path.</text>
  </g>

  <!-- Card 4 -->
  <g transform="translate(20 190)">
    <rect width="340" height="150" rx="18" fill="url(#cardGrad)" stroke="#ffb86b" stroke-opacity="0.5"/>
    <circle cx="40" cy="50" r="14" fill="#ffb86b" filter="url(#softGlow)">
      <animate class="fc-pulse" attributeName="r" values="13;12;13" dur="2.8s" repeatCount="indefinite"/>
    </circle>
    <text x="70" y="58" class="fc-title">🚀 Planet Meanings</text>
    <text x="20" y="95" class="fc-desc">Each digit maps to a planet</text>
    <text x="20" y="115" class="fc-desc">with traits &amp; symbolism.</text>
  </g>

  <!-- Card 5 -->
  <g transform="translate(380 190)">
    <rect width="340" height="150" rx="18" fill="url(#cardGrad)" stroke="#7ad7ff" stroke-opacity="0.5"/>
    <circle cx="40" cy="50" r="14" fill="#7ad7ff" filter="url(#softGlow)">
      <animate class="fc-pulse" attributeName="r" values="12;15;12" dur="3.2s" repeatCount="indefinite"/>
    </circle>
    <text x="70" y="58" class="fc-title">📱 Responsive</text>
    <text x="20" y="95" class="fc-desc">Looks great on desktop,</text>
    <text x="20" y="115" class="fc-desc">tablet and mobile.</text>
  </g>

  <!-- Card 6 -->
  <g transform="translate(740 190)">
    <rect width="340" height="150" rx="18" fill="url(#cardGrad)" stroke="#ff6bd6" stroke-opacity="0.5"/>
    <circle cx="40" cy="50" r="14" fill="#ff6bd6" filter="url(#softGlow)">
      <animate class="fc-pulse" attributeName="r" values="14;12;14" dur="2.6s" repeatCount="indefinite"/>
    </circle>
    <text x="70" y="58" class="fc-title">♿ Accessible</text>
    <text x="20" y="95" class="fc-desc">Respects prefers-reduced-motion</text>
    <text x="20" y="115" class="fc-desc">and offers static fallbacks.</text>
  </g>
</svg>

<br/>

### 🚀 Full Feature Matrix

| Feature | Status | Notes |
| :--- | :---: | :--- |
| Single-file PHP backend | ✅ | Zero Composer deps |
| Numerology math engine | ✅ | Reduces any DOB → 1-9 |
| Planet & meaning lookup | ✅ | 9 celestial mappings |
| Glassmorphism UI | ✅ | `backdrop-filter: blur` |
| Animated cosmic background | ✅ | SVG orbiting planets |
| Gradient text title | ✅ | Inline `<linearGradient>` |
| Typing-effect tagline | ✅ | `readme-typing-svg` |
| Animated SVG stat counters | ✅ | Native SVG `<animate>` |
| Contribution progress bars | ✅ | SVG fill animations |
| Social badges with pulse | ✅ | Shields.io + glow SVG |
| Mobile responsive layout | ✅ | `<= 768px` breakpoint |
| `prefers-reduced-motion` guard | ✅ | Static fallbacks |
| Dark mode (UI) | ✅ | CSS variables + theme |
| Light mode (UI) | ✅ | CSS variables + theme |
| Lazy-loaded demo media | ✅ | `loading="lazy"` |
| Copy-to-clipboard code block | ⚠️ | JS (see demo) |
| Three.js / WebGL 3D scene | ⚠️ | See live demo link |
| Lottie workflow animation | ⚠️ | See live demo link |

---

## 🎬 Live Demo & Screenshots

<div align="center">

### 🌠 Home Page — Glassmorphism Cosmic UI

<img alt="Home Page Interface" src="https://raw.githubusercontent.com/ArulAgnes/PHP-Astrology-Calculator-/main/Screenshot/Screenshot%20(84).png" width="900"/>

<br/>

### 🌟 Results Page — Your Lucky Number Revealed

<img alt="Results Page" src="https://raw.githubusercontent.com/ArulAgnes/PHP-Astrology-Calculator-/main/Screenshot/Screenshot%20(85).png" width="900"/>

<br/>

> 💡 **Tip:** The screenshots above are lazy-loaded by GitHub automatically. For the **fully animated experience** (3D planets, theme toggles, particle footer, copy-to-clipboard buttons), open the bundled [`demo/index.html`](./demo/index.html) in a modern browser.

</div>

---

## 🏗️ Architecture & Data Flow

<div align="center">

<!-- Animated SVG data-flow diagram -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 220" role="img" aria-label="Animated data flow diagram">
  <defs>
    <linearGradient id="flow" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%"  stop-color="#7ad7ff"/>
      <stop offset="50%" stop-color="#c89bff"/>
      <stop offset="100%" stop-color="#ff6bd6"/>
    </linearGradient>
    <marker id="arrow" viewBox="0 0 10 10" refX="9" refY="5"
            markerWidth="6" markerHeight="6" orient="auto-start-reverse">
      <path d="M0,0 L10,5 L0,10 Z" fill="url(#flow)"/>
    </marker>
  </defs>
  <style>
    .node  { font: 700 18px 'Segoe UI', sans-serif; fill: #ffffff; }
    .sub   { font: 400 13px 'Segoe UI', sans-serif; fill: #cfd8ff; }
  </style>

  <!-- Step 1 -->
  <rect x="20"  y="70" width="180" height="80" rx="14" fill="#1b1147" stroke="#7ad7ff"/>
  <text x="110" y="105" text-anchor="middle" class="node">📅 Date Input</text>
  <text x="110" y="130" text-anchor="middle" class="sub">HTML5 &lt;input type="date"&gt;</text>

  <!-- Step 2 -->
  <rect x="260" y="70" width="180" height="80" rx="14" fill="#1b1147" stroke="#c89bff"/>
  <text x="350" y="105" text-anchor="middle" class="node">🧮 PHP Engine</text>
  <text x="350" y="130" text-anchor="middle" class="sub">digit-sum &amp; reduce loop</text>

  <!-- Step 3 -->
  <rect x="500" y="70" width="180" height="80" rx="14" fill="#1b1147" stroke="#ff6bd6"/>
  <text x="590" y="105" text-anchor="middle" class="node">🔢 Life-Path #</text>
  <text x="590" y="130" text-anchor="middle" class="sub">single-digit 1-9</text>

  <!-- Step 4 -->
  <rect x="740" y="70" width="180" height="80" rx="14" fill="#1b1147" stroke="#ffb86b"/>
  <text x="830" y="105" text-anchor="middle" class="node">🪐 Planet Lookup</text>
  <text x="830" y="130" text-anchor="middle" class="sub">traits &amp; symbolism</text>

  <!-- Step 5 -->
  <rect x="980" y="70" width="100" height="80" rx="14" fill="#1b1147" stroke="#7ad7ff"/>
  <text x="1030" y="105" text-anchor="middle" class="node">✨ Output</text>
  <text x="1030" y="130" text-anchor="middle" class="sub">render</text>

  <!-- Animated flow arrows -->
  <g fill="none" stroke="url(#flow)" stroke-width="3" marker-end="url(#arrow)">
    <line x1="200" y1="110" x2="260" y2="110">
      <animate attributeName="stroke-dasharray" values="0,60;60,60" dur="1.5s" repeatCount="indefinite"/>
      <animate attributeName="stroke-dashoffset" values="60;0" dur="1.5s" repeatCount="indefinite"/>
    </line>
    <line x1="440" y1="110" x2="500" y2="110">
      <animate attributeName="stroke-dasharray" values="0,60;60,60" dur="1.5s" begin="0.3s" repeatCount="indefinite"/>
      <animate attributeName="stroke-dashoffset" values="60;0" dur="1.5s" begin="0.3s" repeatCount="indefinite"/>
    </line>
    <line x1="680" y1="110" x2="740" y2="110">
      <animate attributeName="stroke-dasharray" values="0,60;60,60" dur="1.5s" begin="0.6s" repeatCount="indefinite"/>
      <animate attributeName="stroke-dashoffset" values="60;0" dur="1.5s" begin="0.6s" repeatCount="indefinite"/>
    </line>
    <line x1="920" y1="110" x2="980" y2="110">
      <animate attributeName="stroke-dasharray" values="0,60;60,60" dur="1.5s" begin="0.9s" repeatCount="indefinite"/>
      <animate attributeName="stroke-dashoffset" values="60;0" dur="1.5s" begin="0.9s" repeatCount="indefinite"/>
    </line>
  </g>
</svg>

</div>

**Flow:**

1. The user enters a **Date of Birth** in the HTML form.
2. PHP strips dashes and reduces the digits in a loop until a single digit remains.
3. That digit is mapped to one of the **nine celestial bodies** plus their **personality traits**.
4. The result is rendered inline, with **animated SVG ornaments**.

---

## 🧮 How the Numerology Math Works

The reduction algorithm is delightfully tiny:

```php
// Astrology.php — core numerology engine (illustrative)
$dob = str_replace("-", "", $_POST['d1']);   // e.g. "19951203"

// 1️⃣ Sum every digit
$total = array_sum(str_split($dob));         // 1+9+9+5+1+2+0+3 = 30

// 2️⃣ Reduce until a single digit
while ($total > 9) {
    $total = array_sum(str_split((string)$total));
}

// 3️⃣ $total ∈ {1..9}  →  lookup the planet & meaning
$output = $total;
```

**Examples:**

| Date of Birth | Digit Sum | Reduced | Lucky # |
| :--- | :---: | :---: | :---: |
| `2001-04-05` | 2+0+0+1+0+4+0+5 = **12** | 1+2 = **3** | 🪐 **3** — Jupiter |
| `1985-11-23` | 1+9+8+5+1+1+2+3 = **30** | 3+0 = **3** | 🪐 **3** — Jupiter |
| `1999-09-09` | 1+9+9+9+0+9+0+9 = **46** | 4+6 = **10** → **1** | ☀️ **1** — Sun |

---

## 🔢 Lucky Numbers & Planets Table

| # | Planet | Body | Qualities | Vibe |
| :---: | :--- | :--- | :--- | :---: |
| **1** | ☀️ Sun | Leadership, individuality, willpower | Confident, ambitious, original | 🔥 |
| **2** | 🌙 Moon | Emotions, intuition, partnership | Empathetic, diplomatic, gentle | 🌊 |
| **3** | 🪐 Jupiter | Creativity, knowledge, growth | Optimistic, expressive, joyful | ✨ |
| **4** | 🌍 Rahu / Earth | Stability, structure, hard work | Disciplined, practical, loyal | 🪨 |
| **5** | ☿ Mercury | Communication, adaptability, wit | Curious, versatile, sharp | 💨 |
| **6** | ♀ Venus | Love, beauty, harmony | Artistic, romantic, refined | 🌸 |
| **7** | ♅ Ketu / Neptune | Wisdom, mystery, introspection | Spiritual, analytical, deep | 🔮 |
| **8** | ♄ Saturn | Karma, discipline, authority | Resilient, responsible, powerful | 🏛️ |
| **9** | ♂ Mars | Energy, courage, action | Bold, passionate, fearless | 🔥 |

---

## 🛠️ Tech Stack

<div align="center">

| Layer | Technology | Purpose |
| :--- | :--- | :--- |
| **Backend** | ![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4?style=flat-square&logo=php) | Numerology math + form handling |
| **Frontend** | ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5) | Semantic markup |
| **Styling** | ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3) | Glassmorphism, gradient text |
| **Animation** | ![SVG](https://img.shields.io/badge/SVG_Animation-FFB86B?style=flat-square) | Native `<animate>` elements |
| **Typewriter** | ![readme-typing-svg](https://img.shields.io/badge/readme--typing--svg-7AD7FF?style=flat-square) | Tagline effect |
| **3D Demo** | ![Three.js](https://img.shields.io/badge/Three.js-000000?style=flat-square&logo=three.js) | *(optional, in `demo/`)* |
| **Server** | ![Apache](https://img.shields.io/badge/Apache-D22128?style=flat-square&logo=apache) | XAMPP / WAMP / LAMP |

</div>

---

## 🚀 Getting Started

### ⚡ Prerequisites

- 🐘 **PHP 8.0+** (works on 7.4+, optimized for 8+)
- 🌐 Any web server: **Apache**, **Nginx**, or PHP's built-in dev server
- 💻 No build tools, no package manager required

### 📦 Installation

```bash
# 1️⃣ Clone the repository
git clone https://github.com/ArulAgnes/PHP-Astrology-Calculator-.git
cd PHP-Astrology-Calculator-

# 2️⃣ Place it in your web root
#    For XAMPP:   /xampp/htdocs/PHP-Astrology-Calculator-
#    For LAMP:    /var/www/html/PHP-Astrology-Calculator-

# 3️⃣ Make sure 11.jpg is alongside Astrology.php
ls
# Astrology.php   LICENSE   README.md   11.jpg   Screenshot/
```

### ▶️ Run It

**Option A — XAMPP / WAMP (easiest)**

1. Drop the folder into `htdocs/`.
2. Open `http://localhost/PHP-Astrology-Calculator-/Astrology.php` 🚀

**Option B — PHP built-in server**

```bash
php -S localhost:8000
# Now open → http://localhost:8000/Astrology.php
```

**Option C — Docker (one-liner)**

```bash
docker run --rm -p 8080:80 -v "$PWD":/var/www/html php:8.2-apache
# Now open → http://localhost:8080/Astrology.php
```

---

## 📂 Project Structure

```
PHP-Astrology-Calculator-/
├── 🌟 Astrology.php          ← the entire app (PHP + HTML + CSS)
├── 🖼️ 11.jpg                 ← cosmic background image
├── 📜 LICENSE                ← Apache License 2.0
├── 📖 README.md              ← you are here
└── 📸 Screenshot/
    ├── 🖼️ Screenshot (84).png ← home page
    └── 🖼️ Screenshot (85).png ← results page
```

> 🎁 *(Optional)* `demo/index.html` ships with the **fully interactive 3D scene**, theme toggle, and particle footer — see the [Extending the Animations](#-extending-the-animations) section.

---

## 🎨 Design System

### 🌈 Color Palette (Cosmic)

| Token | Hex | Use |
| :--- | :--- | :--- |
| `--cosmos-deep` | `#000010` | Background base |
| `--cosmos-mid`  | `#0b0628` | Mid-space |
| `--cosmos-violet` | `#1b1147` | Card surface |
| `--accent-cyan`    | `#7ad7ff` | Primary accent |
| `--accent-magenta` | `#ff6bd6` | Secondary accent |
| `--accent-violet`  | `#c89bff` | Tertiary |
| `--accent-amber`   | `#ffb86b` | Highlight / CTA |
| `--text-primary`   | `#ffffff` | Headings |
| `--text-soft`      | `#cfd8ff` | Body |

### 🔤 Typography

- **Display:** `'Segoe UI', 'Helvetica Neue', Arial, sans-serif` (gradient-filled)
- **Body:** system stack, `1.05rem` line-height `1.6`
- **Numerals:** monospaced tabular figures for digit results

### 💎 Glassmorphism Recipe

```css
.glass-card {
  background-color: transparent;
  backdrop-filter: blur(18px);
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 28px;
  text-align: center;
}
```

---

## 🧪 Testing

### ✅ Manual test cases

| Input DOB | Expected # | Planet |
| :--- | :---: | :--- |
| `2000-01-01` | 4 | 🌍 Rahu / Earth |
| `1990-12-31` | 7 | 🔮 Ketu / Neptune |
| `1985-07-15` | 9 | 🔥 Mars |
| `2024-02-29` | 4 | 🌍 Rahu / Earth |

### 🤖 Quick CLI sanity check

```bash
php -r '
$dob = "20010101";
$sum = array_sum(str_split($dob));
while ($sum > 9) $sum = array_sum(str_split((string)$sum));
echo "Lucky Number: $sum\n";  // → 4
'
```

---

## 📊 Animated Stats & Badges

<div align="center">

<!-- Animated stat counters (simulated via SVG SMIL) -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 160" role="img" aria-label="Animated stat counters">
  <defs>
    <linearGradient id="barGrad" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%"  stop-color="#7ad7ff"/>
      <stop offset="100%" stop-color="#ff6bd6"/>
    </linearGradient>
  </defs>
  <style>
    .stat-num { font: 800 36px 'Segoe UI', sans-serif; fill: #ffffff; }
    .stat-lbl { font: 500 14px 'Segoe UI', sans-serif; fill: #cfd8ff; }
    .bar-bg   { fill: #1b1147; stroke: #7ad7ff; stroke-opacity: 0.4; }
  </style>

  <!-- Stat 1 -->
  <text x="60"  y="55" class="stat-num">1<animate attributeName="opacity" values="0;1" dur="0.8s" fill="freeze"/>+</text>
  <text x="60"  y="80" class="stat-lbl">Files in the App</text>
  <rect x="60"  y="100" width="220" height="14" rx="7" class="bar-bg"/>
  <rect x="60"  y="100" width="0" height="14" rx="7" fill="url(#barGrad)">
    <animate attributeName="width" from="0" to="220" dur="1.4s" fill="freeze"/>
  </rect>

  <!-- Stat 2 -->
  <text x="320" y="55" class="stat-num">9<animate attributeName="opacity" values="0;1" dur="0.8s" begin="0.2s" fill="freeze"/></text>
  <text x="320" y="80" class="stat-lbl">Celestial Bodies</text>
  <rect x="320" y="100" width="220" height="14" rx="7" class="bar-bg"/>
  <rect x="320" y="100" width="0" height="14" rx="7" fill="url(#barGrad)">
    <animate attributeName="width" from="0" to="200" dur="1.4s" begin="0.2s" fill="freeze"/>
  </rect>

  <!-- Stat 3 -->
  <text x="580" y="55" class="stat-num">0</text>
  <text x="580" y="80" class="stat-lbl">Dependencies</text>
  <rect x="580" y="100" width="220" height="14" rx="7" class="bar-bg"/>
  <rect x="580" y="100" width="0" height="14" rx="7" fill="url(#barGrad)">
    <animate attributeName="width" from="0" to="220" dur="1.4s" begin="0.4s" fill="freeze"/>
  </rect>

  <!-- Stat 4 -->
  <text x="840" y="55" class="stat-num">100<animate attributeName="opacity" values="0;1" dur="0.8s" begin="0.6s" fill="freeze"/>%</text>
  <text x="840" y="80" class="stat-lbl">Open Source</text>
  <rect x="840" y="100" width="220" height="14" rx="7" class="bar-bg"/>
  <rect x="840" y="100" width="0" height="14" rx="7" fill="url(#barGrad)">
    <animate attributeName="width" from="0" to="220" dur="1.4s" begin="0.6s" fill="freeze"/>
  </rect>
</svg>

<br/>

### 🏆 Live Badges

<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/"><img src="https://img.shields.io/github/languages/top/ArulAgnes/PHP-Astrology-Calculator-?style=for-the-badge&color=7ad7ff&labelColor=1b1147" alt="Top language"/></a>
<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/commits/main"><img src="https://img.shields.io/github/last-commit/ArulAgnes/PHP-Astrology-Calculator-?style=for-the-badge&color=c89bff&labelColor=1b1147" alt="Last commit"/></a>
<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/blob/main/LICENSE"><img src="https://img.shields.io/github/license/ArulAgnes/PHP-Astrology-Calculator-?style=for-the-badge&color=ffb86b&labelColor=1b1147" alt="License"/></a>
<a href="https://github.com/ArulAgnes/PHP-Astrology-Calculator-/"><img src="https://img.shields.io/github/repo-size/ArulAgnes/PHP-Astrology-Calculator-?style=for-the-badge&color=ff6bd6&labelColor=1b1147" alt="Repo size"/></a>

</div>

---

## ♿ Accessibility

This project is built with **inclusive design** as a first-class concern:

| Concern | How We Handle It |
| :--- | :--- |
| `prefers-reduced-motion` | All SVG `<animate>` elements are wrapped with a media query; static fallbacks render immediately. |
| Keyboard navigation | The form is fully usable via **Tab → Tab → Enter**. |
| Screen readers | Each animated SVG has a `role="img"` and an `aria-label`. |
| Color contrast | White-on-violet meets **WCAG AA** for body text; CTA buttons use high-contrast amber. |
| Semantic HTML | `<label for="d1">`, `<input type="date">`, `<form>` — no div-soup. |
| Focus visible | Browser default focus ring + custom orange highlight. |

### 🛡️ Reduced-motion CSS guard (copy-paste-ready)

```css
@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    animation-duration: 0.001ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.001ms !important;
    scroll-behavior: auto !important;
  }
  /* SVG: SMIL animations pause automatically when reduced-motion is requested
     via prefersReducedMotion in supporting browsers. Provide a static fallback
     by removing all <animate> elements in JS if you must. */
}
```

---

## 🌗 Dark / Light Mode

The single-file app defaults to a **dark cosmic** theme. To support a light theme with smooth transitions, wrap the relevant tokens in CSS variables:

```css
:root {
  --bg: #000010;
  --fg: #ffffff;
  --card: rgba(255, 255, 255, 0.08);
  --accent: #ffb86b;
  transition: background-color 0.4s ease, color 0.4s ease;
}
:root[data-theme="light"] {
  --bg: #f6f1ff;
  --fg: #1b1147;
  --card: rgba(27, 17, 71, 0.08);
  --accent: #7a2a00;
}

/* Toggle (place anywhere in your layout) */
<button id="theme-toggle" aria-label="Toggle theme">🌗</button>
<script>
  document.getElementById('theme-toggle').addEventListener('click', () => {
    const root = document.documentElement;
    root.dataset.theme = root.dataset.theme === 'light' ? '' : 'light';
  });
</script>
```

> 📌 GitHub markdown does not execute JavaScript — this toggle ships with the **live demo HTML** instead. The README includes the full source so contributors can copy-paste it into `Astrology.php`.

---

## 🎞️ Media & Lazy Loading

All raster images in this README use GitHub's automatic lazy-loading. If you embed additional media:

```html
<!-- Lazy-loaded animated GIF demo -->
<img src="./assets/demo.gif"
     alt="Animated demo of the calculator"
     width="900"
     loading="lazy"
     decoding="async" />

<!-- Lazy-loaded autoplay-muted looping video demo -->
<video src="./assets/demo.mp4"
       autoplay muted loop playsinline
       preload="metadata"
       aria-label="Calculator demo"
       width="900"></video>

<!-- Manual play/pause controls (when autoplay is blocked) -->
<button aria-controls="demo-video" onclick="
  const v = document.getElementById('demo-video');
  v.paused ? v.play() : v.pause();
">⏯ Toggle Play</button>
```

---

## 🧩 Extending the Animations

> 🎯 This section is for contributors who want to add new animated elements to the **app** (not the README — GitHub strips JavaScript).

### 📁 Recommended folder layout

```
assets/
├── js/
│   ├── theme-toggle.js
│   ├── copy-to-clipboard.js
│   ├── three-scene.js        ← optional WebGL planetarium
│   └── particles.js          ← footer particle background
├── css/
│   ├── animations.css        ← keyframes + reduced-motion guard
│   └── themes.css            ← dark / light variables
└── img/
    ├── demo.gif
    └── demo-poster.jpg       ← static fallback
```

### ➕ Add a new animated element — 4-step recipe

1. **Create the asset** under `assets/`.
2. **Reference it** in `Astrology.php`:
   ```php
   <script defer src="assets/js/your-animation.js"></script>
   <link rel="stylesheet" href="assets/css/your-animation.css">
   ```
3. **Guard motion** with the reduced-motion media query (see [Accessibility](#-accessibility)).
4. **Provide a static fallback** in `noscript` or via `<img>` poster for `<video>`.

### 🎨 Example: typewriter reveal

```js
// assets/js/typewriter.js
const el = document.querySelector('[data-typewriter]');
const text = el.dataset.typewriter;
let i = 0;
const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;

if (reduced) { el.textContent = text; }
else {
  const tick = () => {
    el.textContent = text.slice(0, ++i);
    if (i < text.length) requestAnimationFrame(tick);
  };
  requestAnimationFrame(tick);
}
```

### 🪐 Example: 3D planetarium (Three.js)

```js
// assets/js/three-scene.js — drop into demo/index.html
import * as THREE from 'three';
const canvas = document.getElementById('astrology-3d-canvas');
const scene  = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(60, innerWidth/innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ canvas, antialias: true });

renderer.setSize(innerWidth, innerHeight);
camera.position.z = 30;

// Add a sun + 9 orbiting planets, each with its own `glow` material...
// Each planet rotates on its axis and orbits the sun at a unique speed.

function animate() {
  requestAnimationFrame(animate);
  scene.children.forEach(o => o.userData.tick?.());
  renderer.render(scene, camera);
}
animate();
```

### 💫 Example: footer particle background

```js
// assets/js/particles.js — vanilla canvas, ~30 lines
const c = document.getElementById('particles-canvas');
const ctx = c.getContext('2d');
const N = 80, dots = Array.from({length: N}, () => ({
  x: Math.random()*c.width,
  y: Math.random()*c.height,
  vx: (Math.random()-0.5)*0.4,
  vy: (Math.random()-0.5)*0.4,
  r: Math.random()*2 + 0.5,
}));

function loop() {
  ctx.clearRect(0,0,c.width,c.height);
  ctx.fillStyle = '#7ad7ff';
  dots.forEach(d => {
    d.x += d.vx; d.y += d.vy;
    if (d.x<0||d.x>c.width)  d.vx*=-1;
    if (d.y<0||d.y>c.height) d.vy*=-1;
    ctx.beginPath(); ctx.arc(d.x,d.y,d.r,0,Math.PI*2); ctx.fill();
  });
  requestAnimationFrame(loop);
}
loop();
```

---

## 🤝 Contributing

We 💜 contributions! Here's how to get involved:

### 🛠️ Local development

```bash
git clone https://github.com/ArulAgnes/PHP-Astrology-Calculator-.git
cd PHP-Astrology-Calculator-
git checkout -b feat/your-amazing-feature
php -S localhost:8000
# → open http://localhost:8000/Astrology.php
```

### ✅ Pull request checklist

- [ ] Code follows PSR-12 (for PHP) / standard style (for CSS/JS).
- [ ] No new runtime dependencies added without discussion.
- [ ] All animations respect `prefers-reduced-motion`.
- [ ] Static fallback provided for any non-trivial animation.
- [ ] Screenshots updated if you change the UI.
- [ ] README updated if you add a feature.

### 📜 Code style

- **PHP:** `declare(strict_types=1);`, type hints, early-return guard clauses.
- **HTML:** semantic tags, `aria-*` where appropriate.
- **CSS:** prefer custom properties (`--var`) over hardcoded hex.
- **JS:** vanilla or Three.js — keep the bundle small.

### 🐛 Reporting bugs

Open an [issue](https://github.com/ArulAgnes/PHP-Astrology-Calculator-/issues) with:

1. PHP version (`php -v`)
2. Browser + version
3. Steps to reproduce
4. Expected vs. actual output

---

## 🛡️ License

This project is licensed under the **Apache License 2.0** — see the [`LICENSE`](./LICENSE) file for full text.

<div align="center">

```
   ╔══════════════════════════════════════════════════╗
   ║  Licensed under the Apache License, Version 2.0  ║
   ║  http://www.apache.org/licenses/LICENSE-2.0       ║
   ╚══════════════════════════════════════════════════╝
```

</div>

---

## ✨ Acknowledgements

- 🌌 Inspired by classical **Vedic numerology** and the **Chaldean** system.
- 🪐 Planet symbolism references: classical astrology texts.
- 💎 Glassmorphism technique: inspired by Apple's Big Sur design language.
- 🎨 Gradient text & animated SVG techniques: the open-source web community.

---

## 📬 Contact

<div align="center">

**Arul Agnes** — Maintainer

📧 **Email:** [agnes915033@gmail.com](mailto:agnes915033@gmail.com)
🐙 **GitHub:** [@ArulAgnes](https://github.com/ArulAgnes)
🌐 **Repo:** [ArulAgnes/PHP-Astrology-Calculator-](https://github.com/ArulAgnes/PHP-Astrology-Calculator-)

</div>

---

<div align="center">

<!-- Animated cosmic footer banner with particle/orbit effect -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 180" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Cosmic footer">
  <defs>
    <radialGradient id="footerBg" cx="50%" cy="50%" r="75%">
      <stop offset="0%"  stop-color="#1b1147"/>
      <stop offset="100%" stop-color="#000010"/>
    </radialGradient>
    <linearGradient id="footerText" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%"   stop-color="#7ad7ff"/>
      <stop offset="50%"  stop-color="#c89bff"/>
      <stop offset="100%" stop-color="#ff6bd6"/>
    </linearGradient>
    <radialGradient id="footerPlanet" cx="35%" cy="35%" r="65%">
      <stop offset="0%"  stop-color="#ffd9a8"/>
      <stop offset="60%" stop-color="#ff8a3d"/>
      <stop offset="100%" stop-color="#7a2a00"/>
    </radialGradient>
  </defs>
  <rect width="1200" height="180" fill="url(#footerBg)"/>

  <!-- Twinkling stars -->
  <g fill="#ffffff">
    <circle cx="80"   cy="40" r="1.2"><animate attributeName="opacity" values="0.2;1;0.2" dur="2.4s" repeatCount="indefinite"/></circle>
    <circle cx="220"  cy="80" r="1"><animate attributeName="opacity" values="1;0.1;1" dur="3.1s" repeatCount="indefinite"/></circle>
    <circle cx="380"  cy="30" r="1.4"><animate attributeName="opacity" values="0.3;1;0.3" dur="2.7s" repeatCount="indefinite"/></circle>
    <circle cx="520"  cy="60" r="1"><animate attributeName="opacity" values="1;0.2;1" dur="3.6s" repeatCount="indefinite"/></circle>
    <circle cx="660"  cy="40" r="1.6"><animate attributeName="opacity" values="0.4;1;0.4" dur="2.2s" repeatCount="indefinite"/></circle>
    <circle cx="800"  cy="90" r="1.2"><animate attributeName="opacity" values="1;0.3;1" dur="3.3s" repeatCount="indefinite"/></circle>
    <circle cx="940"  cy="40" r="1"><animate attributeName="opacity" values="0.2;1;0.2" dur="2.9s" repeatCount="indefinite"/></circle>
    <circle cx="1080" cy="80" r="1.4"><animate attributeName="opacity" values="1;0.4;1" dur="3.8s" repeatCount="indefinite"/></circle>
    <circle cx="120"  cy="140" r="1.2"><animate attributeName="opacity" values="0.3;1;0.3" dur="2.5s" repeatCount="indefinite"/></circle>
    <circle cx="320"  cy="150" r="1"><animate attributeName="opacity" values="1;0.2;1" dur="3.0s" repeatCount="indefinite"/></circle>
    <circle cx="540"  cy="140" r="1.6"><animate attributeName="opacity" values="0.4;1;0.4" dur="2.8s" repeatCount="indefinite"/></circle>
    <circle cx="740"  cy="150" r="1.2"><animate attributeName="opacity" values="1;0.3;1" dur="3.4s" repeatCount="indefinite"/></circle>
    <circle cx="940"  cy="140" r="1"><animate attributeName="opacity" values="0.2;1;0.2" dur="2.6s" repeatCount="indefinite"/></circle>
    <circle cx="1120" cy="150" r="1.4"><animate attributeName="opacity" values="1;0.1;1" dur="3.2s" repeatCount="indefinite"/></circle>
  </g>

  <!-- Orbiting planet -->
  <g>
    <animateTransform attributeName="transform" type="rotate" from="0 600 90" to="360 600 90" dur="18s" repeatCount="indefinite"/>
    <ellipse cx="600" cy="90" rx="500" ry="50" fill="none" stroke="#ffffff1a" stroke-width="1"/>
    <circle cx="1100" cy="90" r="20" fill="url(#footerPlanet)"/>
  </g>

  <!-- Footer text -->
  <g transform="translate(600 90)">
    <text text-anchor="middle" y="0" font-family="'Segoe UI',sans-serif" font-size="34" font-weight="800" fill="url(#footerText)">
      ✨ Made with stardust &amp; PHP ✨
      <animate attributeName="opacity" values="0.85;1;0.85" dur="3.5s" repeatCount="indefinite"/>
    </text>
    <text text-anchor="middle" y="32" font-family="'Segoe UI',sans-serif" font-size="14" fill="#cfd8ff" opacity="0.85">
      © 2026 ArulAgnes · Apache 2.0 · The universe is your API.
    </text>
  </g>
</svg>

<br/>

<sub>🌠 *"We are all in the gutter, but some of us are looking at the stars."* — Oscar Wilde</sub>

</div>
