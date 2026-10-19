<?php
/* ============================================================
   漫卷 SlowScroll · 隐私说明
   ------------------------------------------------------------
   设计意图：这是一份「可被审阅」的承诺，不是营销页。
   因此本文件的正文全部来自 shared/constants.js 与
   manifest.json 的真实取值，不使用任何模糊措辞——
   写「我们不收集」必须有代码依据，否则这句话本身
   就是虚假承诺。改动扩展功能时请同步复核本文。

   ⚠ 发布前必做（TODO）：
     1. 把下方 CONTACT_EMAIL 换成真实可用的联系邮箱。
        Chrome Web Store 审核会实际发信验证可达性。
     2. 把 VERSION 换成与 manifest.json 一致的版本号。
     3. 把 EFFECTIVE_DATE 改成实际发布日期。

   无依赖、无构建：直接丢到任意支持 PHP 的虚拟主机即可。
   CSS 与本文件分离（privacy.css），改文案不必碰样式。
   ============================================================ */

/* ---------- 站点常量（发布前请替换 TODO 项） ---------- */
const VERSION         = '1.5.1';          // TODO: 与 manifest.json 对齐
const EFFECTIVE_DATE  = '2026-10-19';     // TODO: 实际发布日期
const CONTACT_EMAIL   = 'you@example.com'; // TODO: 换成真实邮箱

/* ---------- 双语文案 ----------
   文案集中在 $DOC，便于校对：所有语言说的是同一件事，
   改语义时只改数据不改模板，避免两份文案说法漂移。 */
$DOC = [
'zh' => [
  'lang'          => 'zh-CN',
  'title'         => '隐私说明 · 漫卷 SlowScroll',
  'meta_desc'     => '漫卷 SlowScroll 浏览器扩展的隐私说明：本扩展不收集、不上传、不共享任何个人数据，全部设置仅存于本机。',
  'brand'         => '漫卷 SlowScroll',
  'hero_title'    => '隐私说明',
  'hero_sub'      => '慢速自动滚动浏览器扩展',
  'updated'       => '生效日期',
  'version_label' => '适用版本',
  'lang_label'    => '语言',
  'toc_title'     => '目录',
  'nav_aria'      => '隐私说明目录',

  'badge_zero'    => '零数据收集',
  'hero_lede'     => '漫卷 SlowScroll 不收集、不上传、不共享你的任何个人数据。本页逐条说明扩展到底做了什么、为什么这样做，以及你的数据存在哪里。',

  'summary_title' => '一句话总结',
  'summary_list'  => [
    ['label' => '收集的数据',   'value' => '无。不收集个人身份信息、不收集浏览历史、不收集页面内容。'],
    ['label' => '发送到服务器', 'value' => '无。扩展代码中不存在任何网络请求（无 fetch / XHR / WebSocket / sendBeacon）。'],
    ['label' => '第三方 SDK',   'value' => '无。无统计、无广告、无埋点、无远程字体或脚本。'],
    ['label' => '数据存放位置', 'value' => '你的浏览器本地设置区（chrome.storage.sync），由浏览器在你自己的账号下加密同步。'],
    ['label' => '你的控制权',   'value' => '可在扩展设置页一键恢复默认；卸载扩展即删除全部本地数据。'],
  ],

  'sections' => [
    [
      'id' => 'collect',
      'h'  => '一、我们收集哪些信息',
      'p'  => [
        '本扩展不收集任何个人信息。「个人信息」包括但不限于姓名、邮箱、电话、地址、身份标识、账号凭据，以及能够单独或结合识别到你的任何标识符。',
        '我们也不收集以下内容：浏览历史、已打开的网址、页面正文、页面内的表单内容、书签、Cookie、广告标识符、设备指纹、地理位置、IP 地址的使用记录。',
        '需要明确的是：扩展会读取页面的 DOM 结构与滚动位置，用于判断滚动容器在哪、当前滚到哪里。这是「让页面动起来」所必需的技术动作，全部发生在你的浏览器内存中，不产生任何副本、不写入磁盘、不离开设备。',
      ],
    ],
    [
      'id' => 'network',
      'h'  => '二、我们如何传输数据',
      'p'  => [
        '本扩展没有任何数据发送行为。源码中不存在 fetch、XMLHttpRequest、WebSocket、sendBeacon 或动态插入远程脚本的逻辑，也不引用任何外部域名。',
        '整个扩展是一个纯本地的浏览器插件：所有功能（滚动、暂停、回顶循环、自动翻页判断）都由本地代码执行，不需要服务器参与。',
      ],
      'note' => '这条结论可以由任何第三方自行验证：扩展的全部源代码公开（MIT 许可），任何人可以逐行阅读或用网络面板抓包，确认没有任何出站请求。',
    ],
    [
      'id' => 'permissions',
      'h'  => '三、权限及其用途',
      'p'  => [
        '扩展声明了三个权限，每一个都对应一项具体功能，没有多余权限。我们没有申请 <code>&lt;all_urls&gt;</code> 之外的主机权限，不申请通知、剪贴板、标识符（tabs）、下载或通讯录等权限。',
      ],
      'table' => [
        'head' => ['权限', '用途', '为什么必要'],
        'rows' => [
          ['<code>activeTab</code>', '在你点击扩展图标或使用快捷键时，对当前标签页临时获得访问能力', '只在你的主动操作瞬间生效，不常驻'],
          ['<code>scripting</code>', '向当前页面按需注入滚动脚本', '滚动逻辑需运行在页面上下文中才能驱动滚动'],
          ['<code>storage</code>', '读写你的扩展设置（如速度、循环开关）', '设置必须保存才能跨会话生效'],
        ],
      ],
    ],
    [
      'id' => 'storage',
      'h'  => '四、你保存在本机的设置',
      'p'  => [
        '扩展使用 <code>chrome.storage.sync</code> 保存以下设置项。这些值全部是偏好配置，不含任何关于「你是谁」或「你看了什么」的信息：',
      ],
      'kv' => [
        ['defaultSpeed',      '默认滚动速度（px/s）'],
        ['step',              '调速步长'],
        ['overlayEnabled',    '是否显示页面悬浮控制条'],
        ['autoHideOverlay',  '悬浮条是否自动隐藏'],
        ['loopEnabled',      '是否启用到底回顶循环'],
        ['gesturePolicy',    '触摸屏幕时的手势策略'],
        ['rangeDwellMs',      '区间循环的停留时长'],
        ['autoNextPage',      '是否自动翻页（默认关闭）'],
        ['autoNextSites',     '自动翻页的站点白名单'],
        ['stopAfterMinutes', '定时自动停止的分钟数'],
      ],
      'note' => '<code>chrome.storage.sync</code> 由浏览器在你的浏览器账号下加密与同步，就像书签一样。这是浏览器的功能，不是我们的服务器——我们读不到这些数据，也无法通过任何接口访问它们。若你未登录浏览器账号，数据只留在本机。',
    ],
    [
      'id' => 'thirdparty',
      'h'  => '五、第三方服务',
      'p'  => [
        '我们不使用任何第三方服务：不接入统计分析、不接入广告网络、不接入崩溃上报、不接入远程字体或 CDN 资源。',
        '因此不存在「第三方共享」或「第三方处理」的情形，也无需征得你的同意。',
      ],
    ],
    [
      'id' => 'rights',
      'h'  => '六、你的权利与控制',
      'p'  => [
        '由于我们不收集数据，不存在需要导出、更正或删除的个人信息。但你对自己的数据拥有直接控制权：',
      ],
      'list' => [
        ['修改与删除', '在扩展设置页中修改任何配置，或点击「恢复默认设置」一次性清空全部本地配置。'],
        ['彻底移除', '在浏览器扩展管理页卸载本扩展，将删除其全部本地存储数据，不留残留。'],
        ['拒绝同步', '如果你不希望设置随浏览器账号同步，可在浏览器中退出账号或使用浏览器的访客/无痕配置，扩展仍可正常工作。'],
      ],
    ],
    [
      'id' => 'children',
      'h'  => '七、未成年人',
      'p'  => [
        '本扩展不收集任何个人数据，因此不涉及收集未成年人个人信息的情形。扩展是通用工具，不针对儿童设计，也不会基于年龄进行任何画像或定向。',
      ],
    ],
    [
      'id' => 'changes',
      'h'  => '八、本说明的变更',
      'p'  => [
        '若功能发生可能影响数据处理方式的变更（例如新增权限、新增网络请求），我们会同步更新本页的生效日期与版本号，并在扩展更新说明中显著提示。',
        '任何涉及数据处理实质变化的版本，都会在这里留下可核对的历史记录。',
      ],
    ],
    [
      'id' => 'contact',
      'h'  => '九、联系我们',
      'p'  => [
        '对本隐私说明有疑问，或发现扩展行为与本页描述不符，欢迎通过下面的邮箱联系我们。我们会核实并回复。',
      ],
      'contact' => true,
    ],
  ],

  'footer_open'  => '本扩展以 MIT 许可开源，全部源代码可审阅。',
  'footer_note'  => '本页为静态说明，不使用 Cookie、不含统计脚本、不发起任何请求。',
  'lang_switch'  => 'English',
],

'en' => [
  'lang'          => 'en',
  'title'         => 'Privacy · Manjuan SlowScroll',
  'meta_desc'     => 'Privacy notice for the Manjuan SlowScroll browser extension: no personal data is collected, transmitted, or shared. All settings stay on your device.',
  'brand'         => 'Manjuan SlowScroll',
  'hero_title'    => 'Privacy Notice',
  'hero_sub'      => 'A slow auto-scrolling browser extension',
  'updated'       => 'Effective date',
  'version_label' => 'Applies to',
  'lang_label'    => 'Language',
  'toc_title'     => 'Contents',
  'nav_aria'      => 'Privacy notice sections',

  'badge_zero'    => 'Zero data collection',
  'hero_lede'     => 'Manjuan SlowScroll does not collect, transmit, or share any personal data. This page explains exactly what the extension does, why, and where your settings live.',

  'summary_title' => 'In short',
  'summary_list'  => [
    ['label' => 'Data collected',   'value' => 'None. No personal identifiers, no browsing history, no page content.'],
    ['label' => 'Sent to servers',  'value' => 'None. The extension contains no network requests at all — no fetch, XHR, WebSocket, or sendBeacon.'],
    ['label' => 'Third-party SDKs', 'value' => 'None. No analytics, no ads, no telemetry, no remote fonts or scripts.'],
    ['label' => 'Where data lives', 'value' => 'Your browser’s local extension storage (chrome.storage.sync), encrypted and synced under your own browser account.'],
    ['label' => 'Your control',     'value' => 'Reset everything from the options page. Uninstalling removes all local data.'],
  ],

  'sections' => [
    [
      'id' => 'collect',
      'h'  => '1. What we collect',
      'p'  => [
        'We collect no personal information whatsoever. “Personal information” means anything that could identify you on its own or in combination: name, email, phone number, address, identifiers, account credentials, and any similar data.',
        'We also collect none of the following: browsing history, URLs you visit, page text, form contents, bookmarks, cookies, advertising identifiers, device fingerprints, geolocation, or IP usage logs.',
        'To be precise: the extension does read a page’s DOM structure and scroll position in order to locate the scroll container and track how far it has scrolled. That is technically required to make the page move. It happens entirely in your browser’s memory — no copy is written to disk and nothing leaves your device.',
      ],
    ],
    [
      'id' => 'network',
      'h'  => '2. How data is transmitted',
      'p'  => [
        'The extension performs no data transmission of any kind. The source contains no fetch, XMLHttpRequest, WebSocket, or sendBeacon calls, loads no remote scripts, and references no external domains.',
        'It is a purely local browser extension: scrolling, pausing, loop-back, and next-page detection all run as local code. No server is involved.',
      ],
      'note' => 'Anyone can verify this independently. The full source is public under the MIT license — read it line by line or watch the network panel; there are no outbound requests.',
    ],
    [
      'id' => 'permissions',
      'h'  => '3. Permissions and why they exist',
      'p'  => [
        'Three permissions are declared, each tied to a specific feature. There are none beyond that. We hold no host permissions other than <code>&lt;all_urls&gt;</code>, and request no notifications, clipboard, tab identifiers, downloads, or contacts access.',
      ],
      'table' => [
        'head' => ['Permission', 'Used for', 'Why it is necessary'],
        'rows' => [
          ['<code>activeTab</code>', 'Temporary access to the current tab when you click the icon or press a shortcut', 'Active only at the moment you act — never standing by'],
          ['<code>scripting</code>', 'Injecting the scroll script into the page on demand', 'Scroll control must run in the page’s own context'],
          ['<code>storage</code>', 'Reading and writing your extension settings (speed, loop, etc.)', 'Settings must persist across sessions'],
        ],
      ],
    ],
    [
      'id' => 'storage',
      'h'  => '4. Settings stored on your device',
      'p'  => [
        'The extension uses <code>chrome.storage.sync</code> to store the preferences below. Every value is configuration — nothing reveals who you are or what you read:',
      ],
      'kv' => [
        ['defaultSpeed',      'Default scroll speed (px/s)'],
        ['step',              'Speed adjustment step'],
        ['overlayEnabled',    'Show the on-page control bar'],
        ['autoHideOverlay',  'Auto-hide the control bar'],
        ['loopEnabled',      'Enable scroll-back-to-top loop'],
        ['gesturePolicy',    'Behaviour when touching the screen'],
        ['rangeDwellMs',      'Dwell time for range loops'],
        ['autoNextPage',      'Automatic page turning (off by default)'],
        ['autoNextSites',     'Site allowlist for automatic page turning'],
        ['stopAfterMinutes', 'Minutes before auto-stop'],
      ],
      'note' => '<code>chrome.storage.sync</code> is encrypted and synced by your browser under your own browser account, much like bookmarks. That is a browser feature, not our server: we cannot read this data and expose no interface that would let us.',
    ],
    [
      'id' => 'thirdparty',
      'h'  => '5. Third-party services',
      'p'  => [
        'We use no third-party services: no analytics, no advertising networks, no crash reporting, no remote fonts, no CDN assets.',
        'Consequently there is no third-party sharing or processing to disclose, and no consent to seek.',
      ],
    ],
    [
      'id' => 'rights',
      'h'  => '6. Your rights and control',
      'p'  => [
        'Because we collect nothing, there is no personal data to export, correct, or delete. You still have direct control over your own data:',
      ],
      'list' => [
        ['Change or delete', 'Edit anything on the options page, or use “Reset to defaults” to clear all local configuration at once.'],
        ['Remove entirely', 'Uninstall the extension from your browser’s extension manager — this deletes all of its local storage, with nothing left behind.'],
        ['Opt out of sync', 'If you would rather settings not sync with your browser account, sign out or use a guest/private profile. The extension works normally either way.'],
      ],
    ],
    [
      'id' => 'children',
      'h'  => '7. Children',
      'p'  => [
        'Since no personal data is collected, no children’s information is gathered. The extension is a general-purpose utility: it is not directed at children and produces no profiling or targeting of any kind.',
      ],
    ],
    [
      'id' => 'changes',
      'h'  => '8. Changes to this notice',
      'p'  => [
        'If a change could affect how data is handled — a new permission, a new network request — we update the effective date and version here, and call it out prominently in the release notes.',
        'Any version with a material change to data handling leaves a verifiable record on this page.',
      ],
    ],
    [
      'id' => 'contact',
      'h'  => '9. Contact us',
      'p'  => [
        'Questions about this notice, or a discrepancy between the extension’s behaviour and this page? Email us at the address below and we will investigate and reply.',
      ],
      'contact' => true,
    ],
  ],

  'footer_open'  => 'This extension is open source under the MIT license; the entire source is auditable.',
  'footer_note'  => 'This page is static: no cookies, no analytics, no requests.',
  'lang_switch'  => '中文',
],
];

/* ---------- 语言选择 ----------
   两级优先级：URL 显式指定 > 浏览器 Accept-Language（默认简中）。
   显式值按前缀匹配（en / en-US / zh / zh-CN 都认），但只接受这两族——
   写成 === 'en' 会让 ?lang=zh 掉进协商分支，于是英语浏览器的访客
   点「中文」却看到英文，正是那种「点了没反应」的静默失效。

   ⚠ 三条约束，改这段时一并守住：
     · $lang 必须以 'zh' 兜底。若初始为 null，协商未命中时
       $DOC[null] 会变成空键访问，整页按空数组渲染。
     · 显式值识别与「是否要走协商」必须用同一个判据。
       用 isset($_GET['lang']) 判断有无、用另一套规则判断是否认得，
       就会在 ?lang=xx 时既认不出又不协商，两头落空。
     · 无法识别的显式值等同「未表达偏好」，交给协商，
       而不是强行按简中渲染。 */
$lang = null;
if (isset($_GET['lang'])) {
  $q = strtolower(trim((string)$_GET['lang']));
  if (str_starts_with($q, 'en'))     $lang = 'en';
  elseif (str_starts_with($q, 'zh')) $lang = 'zh';
}
if ($lang === null) {
  $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
  if (stripos($accept, 'zh') === false && stripos($accept, 'en') !== false) {
    $lang = 'en';
  } else {
    $lang = 'zh';   // 协商无结论时的兜底，必须在此处收口
  }
}
$T = $DOC[$lang];
$other = $lang === 'zh' ? 'en' : 'zh';
?>
<!doctype html>
<html lang="<?= htmlspecialchars($T['lang'], ENT_QUOTES, 'UTF-8') ?>">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?= htmlspecialchars($T['title'], ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($T['meta_desc'], ENT_QUOTES, 'UTF-8') ?>" />
<meta name="robots" content="index,follow" />
<meta name="color-scheme" content="light dark" />
<!-- 唯一的外部资源就是本文件同级样式表：无 CDN、无字体、无统计脚本。
     页面本身不发起任何请求，「不收集」这句话才立得住。 -->
<link rel="stylesheet" href="privacy.css" />
</head>
<body>
<!-- 极光背景：与扩展设计系统同源，纯 CSS 静态层，无重绘开销 -->
<div class="ss-aurora" aria-hidden="true"></div>

<!-- 跳到主内容：键盘用户按 Tab 首项即可越过目录 -->
<a class="skip-link" href="#main"><?= $lang === 'zh' ? '跳到主内容' : 'Skip to main content' ?></a>

<div class="page">
  <header class="hero">
    <p class="hero__brand">
      <!-- 品牌标记内联：避免对外链图片的请求，也避免图标 404 时留破图 -->
      <svg class="brand-mark" viewBox="0 0 32 32" width="26" height="26" aria-hidden="true" focusable="false">
        <defs>
          <linearGradient id="ssBrandGrad" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0" stop-color="#5b5ee8" />
            <stop offset="1" stop-color="#7c3aed" />
          </linearGradient>
        </defs>
        <rect x="1" y="1" width="30" height="30" rx="9" fill="url(#ssBrandGrad)" />
        <g fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round">
          <path d="M11 9v6M21 9v6M11 17v6M21 17v6" />
        </g>
        <path d="M16 15.5l0 4" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" />
        <path d="M13.5 17.5L16 20l2.5-2.5" fill="none" stroke="#ffffff" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <span><?= htmlspecialchars($T['brand'], ENT_QUOTES, 'UTF-8') ?></span>
    </p>

    <h1 class="hero__title"><?= htmlspecialchars($T['hero_title'], ENT_QUOTES, 'UTF-8') ?></h1>
    <p class="hero__sub"><?= htmlspecialchars($T['hero_sub'], ENT_QUOTES, 'UTF-8') ?></p>
    <p class="hero__lede"><?= htmlspecialchars($T['hero_lede'], ENT_QUOTES, 'UTF-8') ?></p>

    <p class="badge badge--live"><?= htmlspecialchars($T['badge_zero'], ENT_QUOTES, 'UTF-8') ?></p>

    <dl class="meta">
      <div class="meta__item">
        <dt><?= htmlspecialchars($T['updated'], ENT_QUOTES, 'UTF-8') ?></dt>
        <dd class="ss-mono"><?= htmlspecialchars(EFFECTIVE_DATE, ENT_QUOTES, 'UTF-8') ?></dd>
      </div>
      <div class="meta__item">
        <dt><?= htmlspecialchars($T['version_label'], ENT_QUOTES, 'UTF-8') ?></dt>
        <dd class="ss-mono">v<?= htmlspecialchars(VERSION, ENT_QUOTES, 'UTF-8') ?></dd>
      </div>
      <div class="meta__item">
        <dt><?= htmlspecialchars($T['lang_label'], ENT_QUOTES, 'UTF-8') ?></dt>
        <dd>
          <!-- 语言切换：同一页面换 query，hreflang 双向声明 -->
          <a class="lang-switch" href="?lang=<?= $other ?>" hreflang="<?= $other === 'en' ? 'en' : 'zh-CN' ?>" rel="alternate">
            <?= htmlspecialchars($T['lang_switch'], ENT_QUOTES, 'UTF-8') ?>
          </a>
        </dd>
      </div>
    </dl>
  </header>

  <div class="layout">
    <!-- 目录：桌面侧栏，移动端折到正文上方 -->
    <nav class="toc" aria-label="<?= htmlspecialchars($T['nav_aria'], ENT_QUOTES, 'UTF-8') ?>">
      <p class="toc__title"><?= htmlspecialchars($T['toc_title'], ENT_QUOTES, 'UTF-8') ?></p>
      <ol class="toc__list">
        <?php foreach ($T['sections'] as $s): ?>
          <li><a href="#<?= htmlspecialchars($s['id'], ENT_QUOTES, 'UTF-8') ?>"><?= $s['h'] ?></a></li>
        <?php endforeach; ?>
      </ol>
    </nav>

    <main id="main" class="main">
      <!-- 摘要表：先给结论，再给论证 -->
      <section class="glass-card summary" aria-labelledby="summary-h">
        <h2 id="summary-h" class="summary__title"><?= htmlspecialchars($T['summary_title'], ENT_QUOTES, 'UTF-8') ?></h2>
        <dl class="summary__list">
          <?php foreach ($T['summary_list'] as $row): ?>
            <div class="summary__row">
              <dt><?= htmlspecialchars($row['label'], ENT_QUOTES, 'UTF-8') ?></dt>
              <dd><?= htmlspecialchars($row['value'], ENT_QUOTES, 'UTF-8') ?></dd>
            </div>
          <?php endforeach; ?>
        </dl>
      </section>

      <?php foreach ($T['sections'] as $s): ?>
        <section class="chapter" aria-labelledby="<?= htmlspecialchars($s['id'] . '-h', ENT_QUOTES, 'UTF-8') ?>">
          <h2 id="<?= htmlspecialchars($s['id'] . '-h', ENT_QUOTES, 'UTF-8') ?>" class="chapter__h">
            <span class="chapter__anchor" id="<?= htmlspecialchars($s['id'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"></span>
            <?= $s['h'] ?>
          </h2>

          <?php foreach ($s['p'] as $para): ?>
            <p class="chapter__p"><?= $para ?></p>
          <?php endforeach; ?>

          <?php if (!empty($s['table'])): ?>
            <div class="table-wrap">
              <table class="table">
                <thead>
                  <tr>
                    <?php foreach ($s['table']['head'] as $th): ?>
                      <th scope="col"><?= $th ?></th>
                    <?php endforeach; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($s['table']['rows'] as $row): ?>
                    <tr>
                      <?php foreach ($row as $i => $cell): ?>
                        <?php if ($i === 0): ?>
                          <th scope="row"><?= $cell ?></th>
                        <?php else: ?>
                          <td><?= $cell ?></td>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>

          <?php if (!empty($s['kv'])): ?>
            <ul class="kv">
              <?php foreach ($s['kv'] as $pair): ?>
                <li class="kv__item">
                  <code class="kv__key"><?= htmlspecialchars($pair[0], ENT_QUOTES, 'UTF-8') ?></code>
                  <span class="kv__desc"><?= htmlspecialchars($pair[1], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($s['list'])): ?>
            <ul class="bullets">
              <?php foreach ($s['list'] as $item): ?>
                <li>
                  <span class="bullets__label"><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></span>
                  <span class="bullets__text"><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($s['note'])): ?>
            <aside class="note">
              <span class="note__mark" aria-hidden="true">i</span>
              <p class="note__text"><?= $s['note'] ?></p>
            </aside>
          <?php endif; ?>

          <?php if (!empty($s['contact'])): ?>
            <p class="contact">
              <a class="contact__mail" href="mailto:<?= htmlspecialchars(CONTACT_EMAIL, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(CONTACT_EMAIL, ENT_QUOTES, 'UTF-8') ?></a>
            </p>
            <?php if (CONTACT_EMAIL === 'you@example.com'): ?>
              <!-- 占位符守卫：未替换就在页面上明示，避免空发审核邮件 -->
              <p class="todo" lang="en">
                ⚠ Placeholder contact address — replace <code>CONTACT_EMAIL</code> in privacy.php before publishing.
              </p>
            <?php endif; ?>
          <?php endif; ?>
        </section>
      <?php endforeach; ?>
    </main>
  </div>

  <footer class="footer">
    <p class="footer__open"><?= htmlspecialchars($T['footer_open'], ENT_QUOTES, 'UTF-8') ?></p>
    <p class="footer__note ss-muted"><?= htmlspecialchars($T['footer_note'], ENT_QUOTES, 'UTF-8') ?></p>
  </footer>
</div>
</body>
</html>