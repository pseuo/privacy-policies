<?php
$requestedLanguage = strtolower((string) ($_GET['lang'] ?? ''));
$language = in_array($requestedLanguage, ['zh', 'cn'], true) ? 'zh' : 'en';
$isEnglish = $language === 'en';
$alternateLanguage = $isEnglish ? 'zh' : 'en';
$languageUrl = getenv('STATIC_EXPORT') === '1'
  ? ($alternateLanguage === 'zh' ? 'zh.html' : 'index.html')
  : '?lang=' . $alternateLanguage;

/* 目录项：只放锚点与标签，标签与正文 h2 标题一致。
   章节正文保持原来的 h2 写法，不为了目录去改文案。 */
$tocItems = $isEnglish ? [
  ['process', '1. Information We Process'],
  ['use', '2. How We Use Information'],
  ['storage', '3. Storage and Retention'],
  ['sharing', '4. Sharing and Third-Party Services'],
  ['choices', '5. Your Choices and Deletion Requests'],
  ['security', '6. Security'],
  ['children', '7. Children\'s Privacy'],
  ['changes', '8. Changes to This Policy'],
  ['contact', '9. Contact Us'],
] : [
  ['process', '一、我们处理的信息'],
  ['use', '二、使用目的'],
  ['storage', '三、存储方式和保存期限'],
  ['sharing', '四、共享和第三方服务'],
  ['choices', '五、你的选择和删除请求'],
  ['security', '六、安全措施'],
  ['children', '七、儿童隐私'],
  ['changes', '八、政策更新'],
  ['contact', '九、联系我们'],
];
?>
<!doctype html>
<html lang="<?= $isEnglish ? 'en' : 'zh-CN' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="color-scheme" content="light dark">
  <meta name="theme-color" content="#f4f6fc">
  <title><?= $isEnglish ? 'vTab New Tab Privacy Policy' : 'vTab 极简新标签页 隐私政策' ?></title>
  <!-- ============================================================
       vTab 隐私政策页 · 设计系统
       ------------------------------------------------------------
       与 SlowScroll / LinkVault / 索引页同源：同一套极光背景、玻璃层、
       排版刻度，四个页面看起来像同一个产品家族的手笔。品牌色取首页
       卡片已定义的 vTab 蓝（--card-accent: vtab），与另两个产品区分。

       ⚠ 四条硬约束，改动时一并守住：

         1. WCAG AA 是底线（正文 ≥ 4.5:1，非文本 ≥ 3:1）。
            玻璃是半透明层，文字最终颜色取决于背后极光色团的强度，
            所有文字色都按「最差叠加背景」选取，而非色卡标称值。
            改 --glass-fill 透明度时必须回头复核这些文字色。

         2. 零外部请求：无 CDN、无 web font、无统计脚本。
            玻璃与极光都是纯 CSS，不产生请求，这个约束拦不住视觉升级。
            字体走系统栈——在一份宣称「不收集」的页面上加载第三方
            字体，是自相矛盾的。

         3. prefers-reduced-motion 下所有动效归零。

         4. 文案是政策正文，不属于设计系统，改版式时不要动它。
            本页的 HTML 里除了 class / id / 包裹元素，正文文字与
            原版逐字一致。
       ============================================================ -->
  <style>
    /* ============================================================
       1 · Tokens
       ============================================================ */
    :root {
      color-scheme: light;

      /* ---- Brand Ramp（vTab 蓝，与首页 vTab 卡片同源） ---- */
      --brand-50:  #eef4ff;
      --brand-100: #dbe8fe;
      --brand-300: #93b8f7;
      --brand-500: #1769e0;   /* 白底正文前景 5.08:1，达 AA */
      --brand-600: #1257bd;
      --grad-from: #2f86f0;
      --grad-to:   #1257bd;

      /* ---- Semantic ---- */
      --color-success:  #047857;
      --color-info:     #1769e0;
      --color-warn-ink: #9a3412;

      /* ---- Text ---- */
      --text-strong:  #151a26;
      --text-body:    #3d4557;
      --text-muted:   #50586b;   /* 最差叠加底 5.25:1，达 AA 正文 */
      --text-inverse: #ffffff;

      /* ---- Glass ---- */
      --glass-fill:        rgba(255, 255, 255, 0.52);
      --glass-fill-strong: rgba(255, 255, 255, 0.68);
      --glass-fill-subtle: rgba(255, 255, 255, 0.34);
      --glass-stroke:      rgba(255, 255, 255, 0.72);
      --glass-stroke-soft: rgba(255, 255, 255, 0.42);
      --glass-blur: 26px;
      --glass-saturate: 165%;

      /* ---- Elevation ---- */
      --shadow-sm: 0 2px 8px rgba(21, 26, 38, .07), 0 1px 2px rgba(21, 26, 38, .04);
      --shadow-md: 0 8px 24px rgba(21, 26, 38, .09), 0 2px 6px rgba(21, 26, 38, .05);
      --shadow-inset-top: inset 0 1px 0 rgba(255, 255, 255, .85);

      /* ---- Radius ---- */
      --radius-sm: 10px;
      --radius-md: 14px;
      --radius-lg: 20px;
      --radius-pill: 999px;

      /* ---- Spacing（4px 基准，刻度连续） ---- */
      --space-1: 4px;
      --space-2: 8px;
      --space-3: 12px;
      --space-4: 16px;
      --space-5: 20px;
      --space-6: 24px;
      --space-8: 32px;
      --space-10: 40px;
      --space-12: 48px;
      --space-16: 64px;

      /* ---- Typography ---- */
      --font-sans: -apple-system, BlinkMacSystemFont, "Segoe UI Variable Text",
                   "Segoe UI", Roboto, "PingFang SC", "Microsoft YaHei", sans-serif;
      --font-mono: ui-monospace, "SF Mono", Menlo, Consolas, monospace;
      --text-xs:   12px;
      --text-sm:   13px;
      --text-md:   14px;
      --text-base: 15px;
      --text-lg:   17px;
      --text-xl:   20px;
      --text-2xl:  26px;
      --text-3xl:  34px;

      --dur-fast: 140ms;
      --dur-normal: 240ms;
      --ease-out: cubic-bezier(.22, 1, .36, 1);

      --focus-ring-color: var(--brand-500);
      --focus-ring-halo: rgba(255, 255, 255, .9);

      /* 正文测宽：中文一行约 42 字，超过后换行明显更易读 */
      --measure: 68ch;
    }

    @media (prefers-color-scheme: dark) {
      :root {
        color-scheme: dark;

        --brand-50:  #0f1a2e;
        --brand-100: #16243c;
        --brand-300: #93b8f7;
        --brand-500: #7fb0f5;   /* 与首页暗色卡片同值 */
        --brand-600: #93b8f7;
        --grad-from: #3b82f6;
        --grad-to:   #1d4ed8;

        --text-strong: #f2f5fb;
        --text-body:   #cbd3e1;
        --text-muted:  #97a1b5;

        --color-success:  #34d399;
        --color-info:     #93c5fd;
        --color-warn-ink: #f59e0b;

        --glass-fill:        rgba(38, 43, 58, .50);
        --glass-fill-strong: rgba(38, 43, 58, .66);
        --glass-fill-subtle: rgba(38, 43, 58, .34);
        --glass-stroke:      rgba(255, 255, 255, .14);
        --glass-stroke-soft: rgba(255, 255, 255, .08);
        --shadow-inset-top:  inset 0 1px 0 rgba(255, 255, 255, .10);

        --focus-ring-color: var(--brand-300);
        --focus-ring-halo: rgba(20, 24, 35, .9);

        --shadow-sm: 0 2px 8px rgba(0, 0, 0, .34);
        --shadow-md: 0 8px 24px rgba(0, 0, 0, .42);
      }
    }

    /* ============================================================
       2 · Reset
       ============================================================ */
    *, *::before, *::after { box-sizing: border-box; }

    html { -webkit-text-size-adjust: 100%; }

    html, body { margin: 0; padding: 0; }

    body {
      font-family: var(--font-sans);
      font-size: var(--text-base);
      line-height: 1.75;            /* 长文段落需要比 UI 更松的行距 */
      color: var(--text-body);
      background: #f4f6fc;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    h1, h2 { margin: 0; color: var(--text-strong); line-height: 1.3; }
    p { margin: 0; }
    ul, li { margin: 0; padding: 0; }
    a { color: var(--color-info); text-decoration-thickness: 1px; text-underline-offset: 3px; }
    a:hover { color: var(--brand-600); }
    @media (prefers-color-scheme: dark) { a:hover { color: var(--brand-300); } }

    :focus { outline: none; }
    :focus-visible {
      outline: 2px solid var(--focus-ring-color);
      outline-offset: 3px;
      border-radius: 6px;
      box-shadow: 0 0 0 2px var(--focus-ring-halo);
    }

    /* ============================================================
       3 · Aurora · 玻璃必须有背景才成立
       ============================================================ */
    .vt-aurora {
      position: fixed;
      inset: 0;
      z-index: -1;
      background:
        radial-gradient(1100px 600px at 12% -8%, rgba(23, 105, 224, .24),  transparent 62%),
        radial-gradient(960px 520px at 92% 4%,   rgba(56, 189, 248, .20),  transparent 60%),
        radial-gradient(900px 620px at 78% 96%,  rgba(129, 140, 248, .18), transparent 62%),
        radial-gradient(760px 520px at 4% 88%,   rgba(14, 165, 233, .16),  transparent 60%),
        linear-gradient(168deg, #f4f6fc 0%, #eaf1f8 46%, #f5f6fb 100%);
    }
    @media (prefers-color-scheme: dark) {
      body { background: #0e1119; }
      .vt-aurora {
        background:
          radial-gradient(1100px 600px at 12% -8%, rgba(23, 105, 224, .26),  transparent 62%),
          radial-gradient(960px 520px at 92% 4%,   rgba(56, 189, 248, .16),  transparent 60%),
          radial-gradient(900px 620px at 78% 96%,  rgba(129, 140, 248, .16), transparent 62%),
          radial-gradient(760px 520px at 4% 88%,   rgba(14, 165, 233, .14),  transparent 60%),
          linear-gradient(168deg, #0e1119 0%, #141a26 48%, #10121c 100%);
      }
    }

    /* 动效统一降级：政策页不需要任何会晃眼的过渡 */
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        animation-duration: .001ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: .001ms !important;
        scroll-behavior: auto !important;
      }
    }

    /* ============================================================
       4 · Skip Link · 键盘用户第一项
       ============================================================ */
    .skip-link {
      position: absolute;
      left: 50%;
      top: 0;
      translate: -50% -120%;
      z-index: 20;
      padding: var(--space-3) var(--space-6);
      border-radius: 0 0 var(--radius-sm) var(--radius-sm);
      background: var(--grad-to);
      color: var(--text-inverse);
      font-size: var(--text-sm);
      font-weight: 600;
      text-decoration: none;
      box-shadow: var(--shadow-md);
      transition: translate var(--dur-fast) var(--ease-out);
    }
    .skip-link:focus-visible { translate: -50% 0; color: var(--text-inverse); }

    /* ============================================================
       5 · Page Shell
       ============================================================ */
    .page {
      max-width: 1080px;
      margin: 0 auto;
      padding: var(--space-8) var(--space-6) var(--space-16);
    }

    /* ---- Top Bar ---- */
    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: var(--space-6);
      flex-wrap: wrap;
      margin-bottom: var(--space-12);
    }

    .brand {
      display: inline-flex;
      align-items: center;
      gap: var(--space-3);
      color: var(--text-strong);
      font-size: var(--text-base);
      font-weight: 650;
      letter-spacing: -.01em;
      text-decoration: none;
    }
    .brand:hover { color: var(--text-strong); }
    .brand-mark {
      flex: none;
      border-radius: 9px;
      box-shadow: var(--shadow-sm);
    }
    .brand__sub {
      display: block;
      color: var(--text-muted);
      font-size: var(--text-xs);
      font-weight: 600;
      letter-spacing: .04em;
    }

    .pill {
      display: inline-flex;
      min-height: 38px;
      align-items: center;
      padding: 7px var(--space-4);
      border-radius: var(--radius-pill);
      background: var(--glass-fill);
      -webkit-backdrop-filter: blur(16px) saturate(var(--glass-saturate));
              backdrop-filter: blur(16px) saturate(var(--glass-saturate));
      border: 1px solid var(--glass-stroke);
      box-shadow: var(--shadow-sm), var(--shadow-inset-top);
      color: var(--text-body);
      font-size: var(--text-sm);
      font-weight: 600;
      text-decoration: none;
      white-space: nowrap;
      transition: background-color var(--dur-fast) linear,
                  color var(--dur-fast) linear,
                  transform var(--dur-fast) var(--ease-out);
    }
    .pill:hover {
      background: var(--glass-fill-strong);
      color: var(--text-strong);
      transform: translateY(-1px);
    }

    /* ============================================================
       6 · Hero · 先给结论，再给论证
       ============================================================ */
    .hero {
      margin-bottom: var(--space-12);
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: var(--space-2);
      color: var(--brand-600);
      font-size: var(--text-xs);
      font-weight: 700;
      letter-spacing: .14em;
      text-transform: uppercase;
    }
    .eyebrow::before {
      content: "";
      width: 18px;
      height: 2px;
      border-radius: 2px;
      background: var(--brand-500);
    }

    .hero__title {
      max-width: 22ch;
      margin-top: var(--space-4);
      font-size: var(--text-3xl);
      font-weight: 650;
      letter-spacing: -.025em;
      line-height: 1.18;
    }

    .meta {
      display: flex;
      flex-wrap: wrap;
      gap: var(--space-3);
      margin-top: var(--space-5);
    }
    .meta__item {
      display: inline-flex;
      align-items: baseline;
      gap: var(--space-2);
      padding: 6px 14px;
      border-radius: var(--radius-pill);
      background: var(--glass-fill);
      -webkit-backdrop-filter: blur(16px) saturate(var(--glass-saturate));
              backdrop-filter: blur(16px) saturate(var(--glass-saturate));
      border: 1px solid var(--glass-stroke-soft);
      box-shadow: var(--shadow-sm), var(--shadow-inset-top);
      font-size: var(--text-sm);
    }
    .meta dt {
      color: var(--text-muted);
      font-size: var(--text-xs);
      font-weight: 600;
      letter-spacing: .04em;
    }
    .meta dd {
      color: var(--text-strong);
      font-weight: 650;
    }
    .meta--updated dt { display: none; }

    /* ============================================================
       7 · Layout
       ⚠ 列宽必须与 DOM 顺序对齐：固定宽列在前（目录 250px），
          弹性列在后给正文；minmax(0,…) 保证长内容只撑内部滚动、
          不参与轨道下限计算。两列都写 1fr 会把宽列判给目录，
          正文被挤进窄列并撑出横向溢出。
       ============================================================ */
    .layout {
      display: grid;
      grid-template-columns: 250px minmax(0, 1fr);
      gap: var(--space-8);
      align-items: start;
    }

    .main { min-width: 0; }

    /* ---- 目录 ---- */
    .toc {
      position: sticky;
      top: var(--space-8);
      padding: var(--space-5);
      border-radius: var(--radius-lg);
      background: var(--glass-fill);
      -webkit-backdrop-filter: blur(var(--glass-blur)) saturate(var(--glass-saturate));
              backdrop-filter: blur(var(--glass-blur)) saturate(var(--glass-saturate));
      border: 1px solid var(--glass-stroke);
      box-shadow: var(--shadow-md), var(--shadow-inset-top);
    }
    .toc__title {
      margin-bottom: var(--space-3);
      color: var(--text-muted);
      font-size: var(--text-xs);
      font-weight: 650;
      letter-spacing: .12em;
      text-transform: uppercase;
    }
    /* 目录项标签自带「一、」或「1.」序号，所以外层必须是 <ul> 而不是
       <ol>——否则浏览器自动编号会和标题里的序号叠成「1. 一、我们处理的信息」。 */
    .toc__list { counter-reset: none; }
    .toc__list li + li { margin-top: 2px; }
    .toc__list a {
      display: block;
      padding: 6px 10px;
      border-radius: var(--radius-sm);
      border-left: 2px solid transparent;
      color: var(--text-body);
      font-size: var(--text-sm);
      text-decoration: none;
      transition: background-color var(--dur-fast) linear,
                  color var(--dur-fast) linear,
                  border-color var(--dur-fast) linear;
    }
    .toc__list a:hover {
      background: var(--glass-fill-strong);
      color: var(--text-strong);
      border-left-color: var(--brand-500);
    }

    @media (max-width: 900px) {
      .layout { grid-template-columns: minmax(0, 1fr); }
      .toc { position: static; }
      .page { padding: var(--space-5) var(--space-4) var(--space-12); }
      .hero__title { font-size: var(--text-2xl); }
      .topbar { margin-bottom: var(--space-8); }
    }

    /* ============================================================
       8 · Chapter
       ============================================================ */
    .chapter {
      max-width: var(--measure);
      min-width: 0;      /* grid 弹性项默认 min-width:auto，长串会撑破布局 */
      margin-bottom: var(--space-10);
      scroll-margin-top: var(--space-8);
    }

    .chapter__h {
      position: relative;
      padding-bottom: var(--space-3);
      margin-bottom: var(--space-4);
      border-bottom: 1px solid var(--glass-stroke-soft);
      font-size: var(--text-xl);
      font-weight: 650;
      letter-spacing: -.015em;
    }
    /* 目录锚点定位到标题顶而非字形顶，否则滚动后标题会贴边 */
    .chapter__anchor {
      position: absolute;
      top: -40px;
      left: 0;
    }

    .chapter__p { margin-bottom: var(--space-4); }

    /* ---- 玻璃要点卡：首段（适用范围）+ 收尾（联系）落在卡里 ---- */
    .glass-card {
      position: relative;
      min-width: 0;
      overflow-wrap: break-word;
      padding: var(--space-6);
      margin-bottom: var(--space-10);
      background: var(--glass-fill);
      -webkit-backdrop-filter: blur(var(--glass-blur)) saturate(var(--glass-saturate));
              backdrop-filter: blur(var(--glass-blur)) saturate(var(--glass-saturate));
      border: 1px solid var(--glass-stroke);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-md), var(--shadow-inset-top);
    }
    .glass-card::before {
      content: "";
      position: absolute;
      inset: 0 0 auto 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .9) 22%,
                                  rgba(255, 255, 255, .9) 78%, transparent);
      pointer-events: none;
    }
    .glass-card p + p { margin-top: var(--space-3); }
    .glass-card a { font-weight: 650; }

    /* ---- 要点列表 ---- */
    .bullets {
      display: grid;
      gap: var(--space-2);
      margin-bottom: var(--space-4);
    }
    /* min-width:0 让长串（go.boxove.com、user_id 和 token Cookie）
       在窄屏下换行而不是撑破容器；overflow-wrap 处理超长不可断词。
       少了这两条，390px 下会横向溢出并把正文裁掉右侧。 */
    .bullets li {
      position: relative;
      min-width: 0;
      padding: var(--space-3) var(--space-4) var(--space-3) var(--space-10);
      border-radius: var(--radius-sm);
      background: var(--glass-fill-subtle);
      border: 1px solid var(--glass-stroke-soft);
      color: var(--text-body);
      font-size: var(--text-sm);
      line-height: 1.7;
      overflow-wrap: break-word;
      word-break: normal;
    }
    /* 用 ::before 画点而非 list-style，避免不同浏览器默认标记不一 */
    .bullets li::before {
      content: "";
      position: absolute;
      left: var(--space-4);
      top: calc(var(--space-3) + .55em);
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--brand-500);
      box-shadow: 0 0 0 3px rgba(23, 105, 224, .16);
    }
    .bullets strong { color: var(--text-strong); font-weight: 650; }

    /* ============================================================
       9 · Footer
       ============================================================ */
    .footer {
      margin-top: var(--space-12);
      padding-top: var(--space-6);
      border-top: 1px solid var(--glass-stroke-soft);
      text-align: center;
    }
    .footer__note { color: var(--text-muted); font-size: var(--text-xs); }

    /* ============================================================
       10 · Print · 商店审核与用户留存常需打印 / 存档
       ============================================================ */
    @media print {
      .vt-aurora { display: none; }
      body { background: #ffffff; color: #000000; font-size: 11pt; }
      .page { max-width: none; padding: 0; }
      .layout { display: block; }
      .toc { display: none; }             /* 打印时目录无价值，占篇幅 */
      .skip-link { display: none; }
      .glass-card, .meta__item, .pill {
        background: none; border: none; box-shadow: none;
      }
      .bullets li { background: none; border: 1px solid #cccccc; }
      /* 外部链接在屏幕上隐藏地址，打印时必须显形，否则读者无从核对。
         只匹配 http(s) 与 mailto：站内锚点打印出来是噪音。 */
      a[href^="http"]::after,
      a[href^="mailto"]::after {
        content: " (" attr(href) ")";
        font-size: 9pt;
        color: #444444;
      }
      .chapter { break-inside: avoid; }
    }
  </style>
</head>
<body>
<!-- 极光背景：纯 CSS 静态层，无重绘开销，零外部请求 -->
<div class="vt-aurora" aria-hidden="true"></div>

<!-- 跳到主内容：键盘用户按 Tab 首项即可越过目录 -->
<a class="skip-link" href="#main"><?= $isEnglish ? 'Skip to main content' : '跳到主内容' ?></a>

<div class="page">
  <header class="topbar">
    <p class="brand">
      <!-- 品牌标记内联：避免对外链图片的请求，也避免图标 404 时留破图 -->
      <svg class="brand-mark" viewBox="0 0 32 32" width="30" height="30" aria-hidden="true" focusable="false">
        <defs>
          <linearGradient id="vtBrandGrad" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0" stop-color="#2f86f0" />
            <stop offset="1" stop-color="#1257bd" />
          </linearGradient>
        </defs>
        <rect x="1" y="1" width="30" height="30" rx="9" fill="url(#vtBrandGrad)" />
        <g fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9.5 11h13" />
          <path d="M16 11v11" />
          <path d="M11.5 22l4.5-4.5 4.5 4.5" />
        </g>
      </svg>
      <span>
        vTab
        <span class="brand__sub"><?= $isEnglish ? 'Minimal new tab' : '极简新标签页' ?></span>
      </span>
    </p>
    <a class="pill" href="<?= htmlspecialchars($languageUrl, ENT_QUOTES, 'UTF-8') ?>" hreflang="<?= $isEnglish ? 'zh-CN' : 'en' ?>" rel="alternate"><?= $isEnglish ? '中文' : 'English' ?></a>
  </header>

  <header class="hero">
    <p class="eyebrow"><?= $isEnglish ? 'Privacy Policy' : '隐私政策' ?></p>
<?php if ($isEnglish): ?>
    <h1 class="hero__title">vTab New Tab Privacy Policy</h1>
    <dl class="meta meta--updated"><div class="meta__item"><dd><?= $isEnglish ? 'Effective date: 2025-05-05' : '生效日期：2025-05-05' ?></dd></div></dl>
    <div class="glass-card">
      <p>Chinese version: <a href="https://go.boxove.com/privacy">https://go.boxove.com/privacy</a></p>
      <p>This Privacy Policy applies to vTab New Tab ("vTab", "we", "us", or "our"). vTab replaces the browser's New Tab page with a customizable bookmark, search, and productivity dashboard.</p>
    </div>
<?php else: ?>
    <h1 class="hero__title">vTab 极简新标签页 隐私政策</h1>
    <dl class="meta meta--updated"><div class="meta__item"><dd><?= '生效日期：2025-05-05' ?></dd></div></dl>
    <div class="glass-card">
      <p>本隐私政策适用于 vTab 极简新标签页（以下简称“vTab”“本扩展”）。本扩展将浏览器新标签页替换为可自定义的书签、搜索和生产力面板。</p>
    </div>
<?php endif; ?>
  </header>

  <div class="layout">
    <!-- 目录：桌面侧栏，移动端折到正文上方 -->
    <nav class="toc" aria-label="<?= $isEnglish ? 'Policy sections' : '政策章节' ?>">
      <p class="toc__title"><?= $isEnglish ? 'Contents' : '目录' ?></p>
      <ul class="toc__list">
        <?php foreach ($tocItems as [$anchor, $label]): ?>
          <li><a href="#<?= htmlspecialchars($anchor, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <main id="main" class="main">
<?php if ($isEnglish): ?>
      <section class="chapter" aria-labelledby="process-h">
        <h2 id="process-h" class="chapter__h"><span class="chapter__anchor" id="process" aria-hidden="true"></span>1. Information We Process</h2>
        <p class="chapter__p">Depending on the features you use, vTab may process:</p>
        <ul class="bullets">
          <li><strong>Authentication information:</strong> the user_id and token cookies associated with go.boxove.com. They are used to maintain your sign-in session and authenticate synchronization requests. vTab does not read login cookies from unrelated websites.</li>
          <li><strong>Account information:</strong> information you provide when registering, signing in, or linking an account, such as a user identifier, email address, or display name.</li>
          <li><strong>User-created content:</strong> bookmarks, URLs, shortcuts, notes, settings, wallpapers, files, or images that you add, select for synchronization, or upload.</li>
          <li><strong>Search information:</strong> search terms may be sent to Baidu when search suggestions are enabled, and to the search service selected by you when you submit a search.</li>
          <li><strong>Technical information:</strong> IP address, browser type, request time, and request logs may be received by our server for security, troubleshooting, and service operation.</li>
          <li><strong>Optional AI service information:</strong> if you configure and use an AI feature, prompts, text, or files submitted to that feature may be sent to the AI service endpoint selected by you. Nothing is sent when the feature is not enabled.</li>
        </ul>
        <p class="chapter__p">vTab does not intentionally read your browsing history, passwords, payment information, or unrelated web page content. The bookmarks permission is used to display and manage bookmarks on the New Tab page. Selected bookmarks are uploaded only when you actively use synchronization.</p>
      </section>

      <section class="chapter" aria-labelledby="use-h">
        <h2 id="use-h" class="chapter__h"><span class="chapter__anchor" id="use" aria-hidden="true"></span>2. How We Use Information</h2>
        <ul class="bullets">
          <li>Provide the New Tab page, bookmark management, shortcuts, search, and customization features.</li>
          <li>Maintain your sign-in state and synchronize content that you choose to synchronize.</li>
          <li>Provide search suggestions, search results, website icons, and optional upload features at your request.</li>
          <li>Provide third-party sign-in or AI features that you actively enable.</li>
          <li>Prevent abuse, protect service security, troubleshoot issues, and improve the service.</li>
        </ul>
      </section>

      <section class="chapter" aria-labelledby="storage-h">
        <h2 id="storage-h" class="chapter__h"><span class="chapter__anchor" id="storage" aria-hidden="true"></span>3. Storage and Retention</h2>
        <p class="chapter__p">Sign-in identifiers and some settings may be stored in browser cookies or local storage. Account data that you choose to synchronize is stored on servers at go.boxove.com and transmitted over HTTPS.</p>
        <p class="chapter__p">We retain account and synchronized data while your account is active or for as long as necessary to provide the relevant features. You may request deletion of your account and associated data by contacting power@boxove.com. After a deletion request is completed, data in backups may remain for a limited backup cycle before being overwritten or deleted.</p>
      </section>

      <section class="chapter" aria-labelledby="sharing-h">
        <h2 id="sharing-h" class="chapter__h"><span class="chapter__anchor" id="sharing" aria-hidden="true"></span>4. Sharing and Third-Party Services</h2>
        <p class="chapter__p">We do not sell your personal information or use it for third-party targeted advertising. Information is shared only as necessary to provide the features:</p>
        <ul class="bullets">
          <li>With go.boxove.com for authentication, synchronization, and vTab features.</li>
          <li>With the search service selected by you, including Baidu, when you request search suggestions or submit a search.</li>
          <li>With QQ, WeChat, or another authentication provider when you voluntarily use that sign-in method.</li>
          <li>With the AI service endpoint selected by you when you voluntarily configure and use an AI feature. That provider's privacy policy applies to its processing.</li>
          <li>With hosting, security, storage, or operations providers that support the service and are subject to confidentiality and security obligations.</li>
          <li>When required by law or necessary to protect users and the security of the service.</li>
        </ul>
        <p class="chapter__p">We do not send your vTab login token to search services.</p>
      </section>

      <section class="chapter" aria-labelledby="choices-h">
        <h2 id="choices-h" class="chapter__h"><span class="chapter__anchor" id="choices" aria-hidden="true"></span>5. Your Choices and Deletion Requests</h2>
        <ul class="bullets">
          <li>You can disable search suggestions, stop synchronization, or sign out in vTab settings.</li>
          <li>You can remove the extension or clear browser site data to delete locally stored information.</li>
          <li>Removing the extension does not automatically delete data already synchronized to our servers. Email power@boxove.com to request deletion of your account or server-side synchronized data.</li>
        </ul>
      </section>

      <section class="chapter" aria-labelledby="security-h">
        <h2 id="security-h" class="chapter__h"><span class="chapter__anchor" id="security" aria-hidden="true"></span>6. Security</h2>
        <p class="chapter__p">We use HTTPS and reasonable technical and organizational measures to reduce the risk of unauthorized access, alteration, disclosure, or loss. No method of transmission or storage is completely secure.</p>
      </section>

      <section class="chapter" aria-labelledby="children-h">
        <h2 id="children-h" class="chapter__h"><span class="chapter__anchor" id="children" aria-hidden="true"></span>7. Children's Privacy</h2>
        <p class="chapter__p">vTab is not directed to children below the age required by applicable law, and we do not knowingly collect children's personal information.</p>
      </section>

      <section class="chapter" aria-labelledby="changes-h">
        <h2 id="changes-h" class="chapter__h"><span class="chapter__anchor" id="changes" aria-hidden="true"></span>8. Changes to This Policy</h2>
        <p class="chapter__p">We may update this policy when features, legal requirements, or data practices change. The updated policy will remain available on this page with a revised effective date.</p>
      </section>

      <section class="chapter" aria-labelledby="contact-h">
        <h2 id="contact-h" class="chapter__h"><span class="chapter__anchor" id="contact" aria-hidden="true"></span>9. Contact Us</h2>
        <div class="glass-card">
          <p>For questions about this policy, personal information, or data deletion, contact <a href="mailto:power@boxove.com">power@boxove.com</a>.</p>
        </div>
      </section>
<?php else: ?>
      <section class="chapter" aria-labelledby="process-h">
        <h2 id="process-h" class="chapter__h"><span class="chapter__anchor" id="process" aria-hidden="true"></span>一、我们处理的信息</h2>
        <p class="chapter__p">根据你使用的功能，vTab 可能处理以下信息：</p>
        <ul class="bullets">
          <li><strong>认证信息：</strong>读取与 go.boxove.com 关联的 user_id 和 token Cookie，并在浏览器本地存储登录状态，用于维持登录和验证同步请求。vTab 不读取其他网站的登录 Cookie。</li>
          <li><strong>账户信息：</strong>你主动注册、登录或绑定账户时提交的用户标识、邮箱、昵称等信息。</li>
          <li><strong>用户创建内容：</strong>你主动添加或选择同步的书签、网址、快捷方式、笔记、设置、壁纸以及主动上传的文件或图片。</li>
          <li><strong>搜索信息：</strong>启用搜索建议时，你输入的搜索词可能发送给百度以返回搜索建议；提交搜索时，搜索词会发送给你选择的搜索服务。</li>
          <li><strong>技术信息：</strong>为安全、故障排查和服务运行，服务器可能接收 IP 地址、浏览器类型、请求时间和请求日志等基本技术信息。</li>
          <li><strong>可选 AI 服务信息：</strong>如果你主动配置并使用 AI 功能，你提交给该功能的提示词、文本或文件可能发送到你选择的 AI 服务地址。未启用该功能时不会发送。</li>
        </ul>
        <p class="chapter__p">vTab 不主动读取你的浏览历史、密码、支付信息或无关网页内容。书签权限仅用于在新标签页展示和管理书签；只有在你主动使用同步功能时，所选书签才会上传。</p>
      </section>

      <section class="chapter" aria-labelledby="use-h">
        <h2 id="use-h" class="chapter__h"><span class="chapter__anchor" id="use" aria-hidden="true"></span>二、使用目的</h2>
        <ul class="bullets">
          <li>提供新标签页、书签管理、快捷入口、搜索和页面自定义功能。</li>
          <li>维护账户登录状态，并同步你主动选择同步的内容。</li>
          <li>根据你的请求提供搜索建议、搜索结果、图标和可选的上传功能。</li>
          <li>提供你主动启用的第三方登录或 AI 服务。</li>
          <li>防止滥用、保障服务安全、排查故障和改进服务。</li>
        </ul>
      </section>

      <section class="chapter" aria-labelledby="storage-h">
        <h2 id="storage-h" class="chapter__h"><span class="chapter__anchor" id="storage" aria-hidden="true"></span>三、存储方式和保存期限</h2>
        <p class="chapter__p">登录标识和部分设置可能保存在浏览器 Cookie 或本地存储中。你主动同步的账户数据保存在 go.boxove.com 服务器上，并通过 HTTPS 传输。</p>
        <p class="chapter__p">我们会在账户存续期间或提供相关功能所必需的期限内保存账户和同步数据。你可以通过 power@boxove.com 请求删除账户及关联数据。删除请求处理完成后，备份中的数据可能因备份周期在有限期限内保留，之后被覆盖或删除。</p>
      </section>

      <section class="chapter" aria-labelledby="sharing-h">
        <h2 id="sharing-h" class="chapter__h"><span class="chapter__anchor" id="sharing" aria-hidden="true"></span>四、共享和第三方服务</h2>
        <p class="chapter__p">我们不出售你的个人信息，也不将其用于第三方定向广告。仅在提供功能所必需的范围内共享：</p>
        <ul class="bullets">
          <li>与 go.boxove.com 共享认证信息和你主动同步的内容，用于登录、同步和扩展功能。</li>
          <li>当你启用搜索建议或提交搜索时，与所选搜索服务（包括百度）共享搜索词。</li>
          <li>当你主动使用 QQ、微信或其他登录方式时，与相应身份认证服务共享完成登录所必需的信息。</li>
          <li>当你主动配置 AI 服务时，与你选择的 AI 服务地址共享该功能所需的提示词、文本、文件或 API 请求信息。该服务的隐私政策由其独立负责。</li>
          <li>与为我们提供主机、安全、存储或运维服务的供应商共享必要的技术信息；供应商须承担相应的保密和安全义务。</li>
          <li>在法律要求、司法程序或保护用户和服务安全所必需时披露相关信息。</li>
        </ul>
        <p class="chapter__p">我们不会向搜索服务发送你的 vTab 登录 token。</p>
      </section>

      <section class="chapter" aria-labelledby="choices-h">
        <h2 id="choices-h" class="chapter__h"><span class="chapter__anchor" id="choices" aria-hidden="true"></span>五、你的选择和删除请求</h2>
        <ul class="bullets">
          <li>你可以在 vTab 设置中关闭搜索建议、停止同步或退出账户。</li>
          <li>你可以移除扩展或清除浏览器站点数据，以删除本地保存的信息。</li>
          <li>移除扩展不会自动删除已同步到服务器的数据。请发送邮件至 power@boxove.com 申请删除账户或服务器上的同步数据。</li>
        </ul>
      </section>

      <section class="chapter" aria-labelledby="security-h">
        <h2 id="security-h" class="chapter__h"><span class="chapter__anchor" id="security" aria-hidden="true"></span>六、安全措施</h2>
        <p class="chapter__p">我们使用 HTTPS 等合理的技术和管理措施保护信息，降低未经授权访问、篡改、泄露或丢失的风险。但任何网络传输和存储方式都不能保证绝对安全。</p>
      </section>

      <section class="chapter" aria-labelledby="children-h">
        <h2 id="children-h" class="chapter__h"><span class="chapter__anchor" id="children" aria-hidden="true"></span>七、儿童隐私</h2>
        <p class="chapter__p">vTab 不面向适用法律规定年龄以下的儿童提供服务，也不会在明知的情况下收集儿童个人信息。</p>
      </section>

      <section class="chapter" aria-labelledby="changes-h">
        <h2 id="changes-h" class="chapter__h"><span class="chapter__anchor" id="changes" aria-hidden="true"></span>八、政策更新</h2>
        <p class="chapter__p">当功能、法律要求或数据处理方式发生变化时，我们会更新本政策并修改生效日期。更新后的政策会继续发布在本页面。</p>
      </section>

      <section class="chapter" aria-labelledby="contact-h">
        <h2 id="contact-h" class="chapter__h"><span class="chapter__anchor" id="contact" aria-hidden="true"></span>九、联系我们</h2>
        <div class="glass-card">
          <p>如对本政策、个人信息处理或数据删除有疑问，请联系：<a href="mailto:power@boxove.com">power@boxove.com</a>。</p>
        </div>
      </section>
<?php endif; ?>
    </main>
  </div>

  <footer class="footer">
    <p class="footer__note">vTab</p>
  </footer>
</div>
</body>
</html>