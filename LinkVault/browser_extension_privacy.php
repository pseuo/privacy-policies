<?php

$requestedLanguage = strtolower((string) ($_GET['lang'] ?? ''));
$language = in_array($requestedLanguage, ['zh', 'cn'], true) ? 'zh' : 'en';
$copy = $language === 'zh' ? [
    'meta' => 'Save to LinkVault 浏览器扩展的隐私政策。',
    'page_title' => '浏览器扩展隐私政策 - LinkVault',
    'skip' => '跳到主要内容',
    'home_label' => 'LinkVault 首页',
    'extension_privacy' => '浏览器扩展隐私',
    'back_home' => '返回首页',
    'switch_language' => 'English',
    'eyebrow' => '扩展隐私政策',
    'title' => '你的链接始终由你掌控',
    'intro' => '本政策仅适用于 Save to LinkVault 浏览器扩展，说明扩展会处理哪些数据、何时处理、存储位置及删除方式。',
    'updated' => '最后更新：',
    'nav' => ['处理的数据', '用途与共享', '存储与删除', '权限', '联系我们'],
    'sections' => [
        ['01 / 处理的数据', '仅处理你所请求操作需要的数据'],
        ['02 / 用途与共享', '不出售、不投放广告，也不跟踪'],
        ['03 / 存储与删除', '本地保存，直到你修改或移除'],
        ['04 / 权限', '扩展为什么需要这些权限'],
        ['05 / 联系我们', '问题或请求'],
    ],
    'data' => [
        ['网页与链接', '当你通过弹窗、快捷键或右键菜单选择保存时，扩展会处理当前网页的 URL 和标签页标题。选中文本的操作只会处理你选中内容中提取出的 HTTP(S) URL。'],
        ['LinkVault 设置', '你配置的 LinkVault 服务地址、Bearer Token、默认标签、自动标签设置和自定义标签规则保存在浏览器配置文件本地。'],
        ['链接数据', '扩展会处理你填写的字段：标题、URL、标签、自定义短码、日期、点击上限、一次性模式、收藏状态和活动字段。搜索会处理你输入的查询词和返回的匹配链接。'],
        ['离线队列', '当保存操作无法连接 LinkVault 或收到可重试的服务错误时，提交的链接数据和创建字段会暂存在本地队列中，最多 100 条，直到重试成功或你移除扩展。'],
    ],
    'purpose' => [
        '扩展仅在你触发保存操作后，将链接创建数据发送到你配置的 LinkVault 服务地址。',
        '扩展仅向该 LinkVault 服务发送 Bearer Token，并通过 Authorization 请求头进行身份验证。',
        '搜索或查看已保存链接的状态时，扩展只会将查询词或链接 ID 发送到该配置的服务。',
        '扩展不使用分析 SDK、广告、联盟跟踪、远程代码或第三方数据接收方，也不会出于无关目的出售或转移你的数据。',
        '除非你明确在右键保存操作中选中 URL，否则扩展不会读取网页内容、浏览历史、密码、支付信息、按键记录或页面数据。',
    ],
    'storage' => [
        '扩展设置（包括 Bearer Token）和队列项目保存在浏览器配置文件中扩展的本地存储内。扩展不会同步这些数据，也不会在 LinkVault 中建立单独的扩展数据库。',
        '你可以移除扩展，或通过浏览器的扩展管理界面清除其存储，来删除本地设置和队列项目。在 LinkVault 中删除或轮换 Token 后，该 Token 将无法授权后续请求。成功发送到你配置的 LinkVault 服务的数据受该服务隐私政策约束，并可在服务中管理。',
    ],
    'important' => ['重要安全说明', '扩展本地存储不是加密的密钥存储。请使用权限范围有限、有效期较短的 LinkVault Token，并保护好浏览器配置文件和操作系统账户。'],
    'permissions' => [
        ['activeTab', '仅在你打开扩展或使用扩展命令后读取当前标签页的 URL 和标题。'],
        ['contextMenus', '提供网页、链接或选中 URL 的右键保存操作。'],
        ['storage', '保存你的设置和本地离线队列。'],
        ['alarms', '每五分钟重试队列中的保存操作。'],
        ['可选主机访问权限', '只会为你配置的 LinkVault 服务来源请求，以便扩展调用该服务的 API。'],
    ],
    'contact' => [
        '如对本浏览器扩展隐私政策有疑问，或希望提出隐私请求，请联系 ',
        '如对本浏览器扩展隐私政策有疑问，或希望提出隐私请求，请联系你所配置服务地址的 LinkVault 管理员。',
        'LinkVault 服务隐私说明',
    ],
] : [
    'meta' => 'Privacy policy for the Save to LinkVault browser extension.',
    'page_title' => 'Browser Extension Privacy Policy - LinkVault',
    'skip' => 'Skip to main content',
    'home_label' => 'LinkVault home',
    'extension_privacy' => 'Browser extension privacy',
    'back_home' => 'Back to home',
    'switch_language' => '中文',
    'eyebrow' => 'EXTENSION PRIVACY POLICY',
    'title' => 'Your links stay under your control',
    'intro' => 'This policy applies only to the Save to LinkVault browser extension. It explains what the extension processes, when it does so, where it is stored, and how to delete it.',
    'updated' => 'Last updated:',
    'nav' => ['Data processed', 'Purpose and sharing', 'Storage and deletion', 'Permissions', 'Contact'],
    'sections' => [
        ['01 / DATA PROCESSED', 'Only data needed for your requested action'],
        ['02 / PURPOSE AND SHARING', 'No sale, advertising, or tracking'],
        ['03 / STORAGE AND DELETION', 'Local until you change or remove it'],
        ['04 / PERMISSIONS', 'Why the extension requests them'],
        ['05 / CONTACT', 'Questions or requests'],
    ],
    'data' => [
        ['Pages and links', 'When you choose Save from the popup, shortcut, or context menu, the extension processes the URL and current tab title. A selected-text action processes only an HTTP(S) URL extracted from the text you select.'],
        ['Your LinkVault settings', 'The configured LinkVault service URL, Bearer token, default tags, automatic-tag settings, and custom tag rules are stored locally in the browser profile.'],
        ['Link data', 'The extension processes the fields you enter: title, URL, tags, custom code, dates, click limit, one-time mode, favorite status, and campaign fields. Search processes the query you type and returned matching links.'],
        ['Offline queue', 'If a save cannot reach LinkVault or receives a retryable service error, the submitted link data and creation fields are stored locally in a queue of up to 100 items until a retry succeeds or you remove the extension.'],
    ],
    'purpose' => [
        'The extension sends link creation data to only the LinkVault service URL that you configure, and only after you invoke a save action.',
        'It sends your Bearer token in an Authorization request header solely to authenticate with that configured LinkVault service.',
        'When you search or view a saved link\'s status, it sends the search query or link ID only to that configured service.',
        'It does not use analytics SDKs, advertising, affiliate tracking, remote code, or third-party data recipients. It does not sell or transfer your data for unrelated purposes.',
        'It does not read page contents, browsing history, passwords, payment information, keystrokes, or data from pages unless you explicitly select a URL for the context-menu save action.',
    ],
    'storage' => [
        'Extension settings, including the Bearer token, and queued items are stored in the extension\'s local storage within your browser profile. They are not synced by this extension and are not stored in a separate LinkVault extension database.',
        'You can delete locally stored settings and queued items by removing the extension or clearing its storage through your browser\'s extension controls. Deleting or rotating a token at LinkVault prevents it from authorizing future requests. Data successfully sent to your configured LinkVault service is governed by that service\'s privacy policy and can be managed there.',
    ],
    'important' => ['Important security note', 'Extension local storage is not an encrypted secret store. Use a narrowly scoped, short-lived LinkVault token and protect your browser profile and operating system account.'],
    'permissions' => [
        ['activeTab', 'Reads the current tab\'s URL and title only after you open the extension or use its command.'],
        ['contextMenus', 'Provides explicit right-click save actions for a page, link, or selected URL.'],
        ['storage', 'Stores your settings and the local offline queue.'],
        ['alarms', 'Retries queued saves every five minutes.'],
        ['Optional host access', 'Requested only for the LinkVault service origin you configure, so the extension can call that service\'s API.'],
    ],
    'contact' => [
        'For questions about this browser extension privacy policy or to make a privacy request, contact ',
        'For questions about this browser extension privacy policy or to make a privacy request, contact the LinkVault service administrator for the service URL you configured.',
        'LinkVault service privacy',
    ],
];

if (!function_exists('e')) {
    function e($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('app_path')) {
    function app_path($path)
    {
        return $path === '/' ? '/' : '/' . ltrim((string) $path, '/');
    }
}

$alternateLanguage = $language === 'zh' ? 'en' : 'zh';
$languageUrl = '?lang=' . $alternateLanguage;
$linkVaultUrl = 'https://github.com/pseuo/LinkVault';
$contactEmail = isset($contact) ? trim((string) $contact) : '';
?>
<!doctype html>
<html lang="<?= $language === 'zh' ? 'zh-CN' : 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#f3f1eb">
    <meta name="description" content="<?= e($copy['meta']) ?>">
    <title><?= e($copy['page_title']) ?></title>
    <style>
        :root {
            color-scheme: light;
            --ink: #12233f;
            --ink-soft: #506078;
            --paper: #f3f1eb;
            --surface: #fbfaf7;
            --surface-strong: #ffffff;
            --line: #d8d9d4;
            --line-strong: #bfc5c3;
            --accent: #c7f36b;
            --accent-deep: #8dad35;
            --blue: #5e7cf2;
            --shadow: 0 24px 70px rgba(18, 35, 63, .09);
            --sans: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            --serif: "Iowan Old Style", "Palatino Linotype", Palatino, Georgia, serif;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                color-scheme: dark;
                --ink: #f2f4ee;
                --ink-soft: #aeb9c8;
                --paper: #111b2d;
                --surface: #17243a;
                --surface-strong: #1d2c45;
                --line: #33425a;
                --line-strong: #52637c;
                --accent: #c7f36b;
                --accent-deep: #9fca43;
                --blue: #91a7ff;
                --shadow: 0 24px 70px rgba(0, 0, 0, .24);
            }
        }

        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            background:
                radial-gradient(circle at 12% 8%, rgba(199, 243, 107, .18), transparent 24rem),
                var(--paper);
            color: var(--ink);
            font-family: var(--sans);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        a { color: inherit; }

        a:focus-visible {
            outline: 3px solid var(--blue);
            outline-offset: 4px;
            border-radius: 4px;
        }

        .skip-link {
            position: fixed;
            z-index: 10;
            top: 12px;
            left: 12px;
            padding: 10px 14px;
            background: var(--ink);
            color: var(--paper);
            transform: translateY(-160%);
            transition: transform .2s ease;
        }

        .skip-link:focus { transform: translateY(0); }

        .page-shell {
            width: min(1380px, calc(100% - 48px));
            margin: 0 auto;
            padding: 28px 0 84px;
        }

        .site-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 0 0 28px;
            border-bottom: 1px solid var(--line);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            color: var(--ink);
            text-decoration: none;
        }

        .brand-mark {
            display: grid;
            width: 42px;
            height: 42px;
            place-items: center;
            border: 1px solid var(--ink);
            border-radius: 13px 13px 13px 4px;
            background: var(--accent);
            box-shadow: 4px 4px 0 var(--ink);
        }

        .brand-mark svg { width: 22px; height: 22px; }

        .brand-copy { display: grid; line-height: 1.15; }

        .brand-copy strong {
            font-size: 15px;
            letter-spacing: -.02em;
        }

        .brand-copy small {
            margin-top: 4px;
            color: var(--ink-soft);
            font-size: 10px;
            font-weight: 750;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            font-weight: 750;
        }

        .header-actions > a:first-child {
            padding: 8px 12px;
            color: var(--ink-soft);
            text-decoration: none;
        }

        .button {
            display: inline-flex;
            min-height: 42px;
            align-items: center;
            justify-content: center;
            padding: 9px 15px;
            border: 1px solid var(--ink);
            border-radius: 999px;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .01em;
            text-decoration: none;
            transition: background-color .2s ease, color .2s ease, transform .2s ease;
        }

        .button:hover { transform: translateY(-2px); }

        .button-secondary { background: var(--ink); color: var(--paper); }

        .layout {
            display: grid;
            grid-template-columns: 245px minmax(0, 1fr);
            gap: clamp(48px, 8vw, 130px);
            align-items: start;
        }

        .policy-rail {
            position: sticky;
            top: 28px;
            padding-top: 54px;
        }

        .rail-label,
        .public-report-eyebrow {
            margin: 0;
            color: var(--accent-deep);
            font-size: 10px;
            font-weight: 850;
            letter-spacing: .16em;
            line-height: 1.35;
            text-transform: uppercase;
        }

        .rail-label { margin-bottom: 18px; }

        .policy-nav {
            display: grid;
            gap: 4px;
            margin-left: -12px;
        }

        .policy-nav a {
            display: block;
            padding: 10px 12px;
            border-left: 2px solid transparent;
            color: var(--ink-soft);
            font-size: 12px;
            font-weight: 700;
            line-height: 1.35;
            text-decoration: none;
            transition: color .2s ease, border-color .2s ease, background-color .2s ease;
        }

        .policy-nav a:hover,
        .policy-nav a:focus-visible {
            border-left-color: var(--accent-deep);
            background: rgba(199, 243, 107, .14);
            color: var(--ink);
            outline: none;
        }

        .rail-rule {
            width: 44px;
            height: 4px;
            margin-top: 42px;
            background: var(--accent);
            box-shadow: 8px 0 0 var(--ink), 16px 0 0 var(--blue);
        }

        .privacy-main { min-width: 0; }

        .privacy-intro {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 210px;
            gap: 44px;
            align-items: end;
            min-height: 480px;
            padding: 92px 0 78px;
        }

        .privacy-intro h1 {
            max-width: 760px;
            margin: 18px 0 24px;
            font-family: var(--serif);
            font-size: clamp(52px, 7vw, 104px);
            font-weight: 500;
            letter-spacing: -.065em;
            line-height: .92;
        }

        .privacy-intro > div:first-child > p:not(.public-report-eyebrow):not(.updated) {
            max-width: 635px;
            margin: 0;
            color: var(--ink-soft);
            font-size: clamp(16px, 1.6vw, 20px);
            line-height: 1.55;
        }

        .updated {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin: 28px 0 0;
            color: var(--ink-soft);
            font-size: 12px;
            font-weight: 700;
        }

        .updated::before {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--accent-deep);
            content: "";
        }

        .intro-stamp {
            display: grid;
            width: 180px;
            height: 180px;
            place-items: center;
            justify-self: end;
            border: 1px solid var(--ink);
            border-radius: 50%;
            background: var(--accent);
            color: var(--ink);
            transform: rotate(8deg);
        }

        .intro-stamp span {
            width: 112px;
            font-size: 11px;
            font-weight: 850;
            letter-spacing: .12em;
            line-height: 1.35;
            text-align: center;
            text-transform: uppercase;
        }

        .privacy-section {
            padding: 82px 0 88px;
            border-top: 1px solid var(--line);
            scroll-margin-top: 28px;
        }

        .section-heading {
            display: grid;
            grid-template-columns: minmax(180px, .68fr) minmax(0, 1.32fr);
            gap: 32px;
            align-items: start;
            margin-bottom: 38px;
        }

        .section-heading h2 {
            max-width: 720px;
            margin: -7px 0 0;
            font-family: var(--serif);
            font-size: clamp(32px, 4vw, 58px);
            font-weight: 500;
            letter-spacing: -.05em;
            line-height: .98;
        }

        .privacy-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1px;
            overflow: hidden;
            border: 1px solid var(--line);
            background: var(--line);
        }

        .privacy-grid article {
            min-height: 216px;
            padding: 28px 30px 32px;
            background: var(--surface);
        }

        .privacy-grid article:nth-child(3),
        .privacy-grid article:nth-child(4) { background: var(--surface-strong); }

        .card-index {
            display: block;
            margin-bottom: 34px;
            color: var(--accent-deep);
            font-size: 11px;
            font-weight: 850;
            letter-spacing: .12em;
        }

        .privacy-grid h3 {
            margin: 0 0 9px;
            font-size: 17px;
            letter-spacing: -.02em;
            line-height: 1.25;
        }

        .privacy-grid p,
        .privacy-section > p,
        .contact-copy {
            max-width: 760px;
            margin: 0;
            color: var(--ink-soft);
            font-size: 15px;
            line-height: 1.75;
        }

        .privacy-list {
            display: grid;
            gap: 0;
            max-width: 900px;
            margin: 0;
            padding: 0;
            list-style: none;
            border-top: 1px solid var(--line-strong);
        }

        .privacy-list li {
            display: grid;
            grid-template-columns: 30px minmax(0, 1fr);
            gap: 18px;
            padding: 21px 0;
            border-bottom: 1px solid var(--line);
            color: var(--ink-soft);
            font-size: 15px;
            line-height: 1.7;
        }

        .privacy-list li::before {
            display: grid;
            width: 24px;
            height: 24px;
            place-items: center;
            border: 1px solid var(--ink);
            border-radius: 50%;
            color: var(--ink);
            content: "✓";
            font-size: 12px;
            font-weight: 850;
        }

        .storage-copy {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 28px;
            max-width: 900px;
        }

        .storage-copy p { margin: 0; }

        .privacy-callout {
            display: grid;
            grid-template-columns: 200px minmax(0, 1fr);
            gap: 24px;
            max-width: 900px;
            margin-top: 42px;
            padding: 24px 26px;
            border: 1px solid var(--ink);
            border-radius: 2px;
            background: var(--accent);
            color: var(--ink);
        }

        .privacy-callout strong {
            font-size: 12px;
            letter-spacing: .08em;
            line-height: 1.4;
            text-transform: uppercase;
        }

        .privacy-callout span {
            font-size: 14px;
            font-weight: 650;
            line-height: 1.6;
        }

        .privacy-permission-list {
            max-width: 900px;
            margin: 0;
            border-top: 1px solid var(--line-strong);
        }

        .privacy-permission-list > div {
            display: grid;
            grid-template-columns: minmax(150px, .35fr) minmax(0, 1fr);
            gap: 26px;
            padding: 20px 0;
            border-bottom: 1px solid var(--line);
        }

        .privacy-permission-list dt,
        .privacy-permission-list dd { margin: 0; }

        .privacy-permission-list code {
            display: inline-block;
            padding: 5px 8px;
            border: 1px solid var(--line-strong);
            border-radius: 4px;
            background: var(--surface);
            color: var(--ink);
            font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
            font-size: 12px;
            font-weight: 700;
        }

        .privacy-permission-list dd {
            color: var(--ink-soft);
            font-size: 15px;
            line-height: 1.7;
        }

        .contact-panel {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 30px;
            align-items: end;
            max-width: 900px;
            padding: 30px;
            border: 1px solid var(--line);
            background: var(--surface);
        }

        .contact-panel a:not(.button) {
            color: var(--ink);
            font-weight: 800;
            text-decoration-color: var(--accent-deep);
            text-decoration-thickness: 3px;
            text-underline-offset: 3px;
        }

        .privacy-actions { margin: 0; }

        @media (max-width: 900px) {
            .layout { display: block; }

            .policy-rail {
                position: static;
                padding-top: 24px;
            }

            .policy-nav {
                display: flex;
                gap: 8px;
                margin: 0;
                overflow-x: auto;
                padding-bottom: 8px;
                scrollbar-width: thin;
            }

            .policy-nav a {
                flex: 0 0 auto;
                border: 1px solid var(--line);
                border-radius: 999px;
                padding: 9px 12px;
                white-space: nowrap;
            }

            .policy-nav a:hover,
            .policy-nav a:focus-visible { border-color: var(--accent-deep); }

            .rail-rule { display: none; }

            .privacy-intro { min-height: 0; padding: 82px 0 74px; }
        }

        @media (max-width: 620px) {
            .page-shell { width: min(100% - 32px, 560px); padding-top: 18px; }

            .site-header {
                align-items: flex-start;
                padding-bottom: 20px;
            }

            .header-actions { gap: 2px; }

            .header-actions > a:first-child { padding: 8px; }

            .button { min-height: 38px; padding: 8px 12px; }

            .privacy-intro {
                display: block;
                padding: 66px 0 60px;
            }

            .privacy-intro h1 {
                margin-top: 16px;
                font-size: clamp(48px, 16vw, 76px);
            }

            .intro-stamp {
                width: 118px;
                height: 118px;
                margin: 38px 12px 0 auto;
            }

            .intro-stamp span { width: 78px; font-size: 8px; }

            .privacy-section { padding: 58px 0 64px; }

            .section-heading {
                display: block;
                margin-bottom: 28px;
            }

            .section-heading h2 { margin-top: 14px; font-size: 40px; }

            .privacy-grid,
            .storage-copy { grid-template-columns: 1fr; }

            .privacy-grid article { min-height: 0; padding: 24px; }

            .card-index { margin-bottom: 26px; }

            .privacy-list li { grid-template-columns: 26px minmax(0, 1fr); gap: 12px; }

            .privacy-callout,
            .contact-panel {
                grid-template-columns: 1fr;
                gap: 16px;
                padding: 22px;
            }

            .privacy-permission-list > div {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .contact-panel .button { justify-self: start; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { transition-duration: .01ms !important; }
        }

        /* Keep the policy page simple and document-like, like the vTab policy page. */
        :root {
            color-scheme: light;
            --ink: #202534;
            --ink-soft: #4b5563;
            --paper: #f5f7fb;
            --surface: #ffffff;
            --surface-strong: #ffffff;
            --line: #e5e7eb;
            --line-strong: #d1d5db;
            --blue: #1769e0;
        }

        html { scroll-behavior: auto; }

        body {
            background: var(--paper);
            color: var(--ink);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.75;
        }

        .page-shell {
            width: min(860px, calc(100% - 48px));
            margin: 32px auto;
            padding: 40px 48px;
            background: var(--surface);
            border-radius: 14px;
            box-shadow: 0 8px 30px rgba(26, 39, 65, .08);
        }

        .site-header {
            display: block;
            padding: 0;
            border: 0;
        }

        .brand,
        .policy-rail,
        .public-report-eyebrow,
        .intro-stamp { display: none; }

        .header-actions {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            font-size: 14px;
            font-weight: 400;
        }

        .header-actions > a:first-child,
        .header-actions .button,
        .privacy-actions .button {
            min-height: 0;
            padding: 0;
            border: 0;
            border-radius: 0;
            background: transparent;
            color: var(--blue);
            font-size: inherit;
            font-weight: 400;
            text-decoration: underline;
            text-underline-offset: 2px;
        }

        .header-actions .button:hover,
        .privacy-actions .button:hover { transform: none; }

        .layout,
        .privacy-main { display: block; }

        .privacy-intro {
            display: block;
            min-height: 0;
            padding: 0;
        }

        .privacy-intro h1 {
            max-width: none;
            margin: 0;
            font-family: inherit;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: 1.3;
        }

        .privacy-intro > div:first-child > p:not(.public-report-eyebrow):not(.updated) {
            max-width: none;
            margin: 0;
            color: var(--ink);
            font-size: 16px;
            line-height: 1.75;
        }

        .updated {
            display: block;
            margin: 0;
            color: #6b7280;
            font-size: 14px;
            font-weight: 400;
        }

        .updated::before { display: none; }

        .privacy-section {
            padding: 0;
            border: 0;
            scroll-margin-top: 0;
        }

        .section-heading {
            display: block;
            margin: 30px 0 0;
        }

        .section-heading h2 {
            max-width: none;
            margin: 30px 0 0;
            font-family: inherit;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0;
            line-height: 1.3;
        }

        .privacy-grid {
            display: block;
            border: 0;
            background: transparent;
        }

        .privacy-grid article,
        .privacy-grid article:nth-child(3),
        .privacy-grid article:nth-child(4) {
            min-height: 0;
            margin: 0 0 14px;
            padding: 0;
            background: transparent;
        }

        .card-index { display: none; }

        .privacy-grid h3 {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
        }

        .privacy-grid p,
        .privacy-section > p,
        .contact-copy,
        .privacy-permission-list dd {
            max-width: none;
            color: var(--ink);
            font-size: 16px;
            line-height: 1.75;
        }

        .privacy-list {
            display: block;
            max-width: none;
            margin: 0;
            padding-left: 24px;
            border: 0;
            list-style: disc;
        }

        .privacy-list li {
            display: list-item;
            padding: 0;
            border: 0;
            color: var(--ink);
            font-size: 16px;
            line-height: 1.75;
        }

        .privacy-list li::before { display: none; }

        .storage-copy {
            display: block;
            max-width: none;
        }

        .storage-copy p { margin: 0 0 12px; }

        .privacy-callout {
            display: block;
            max-width: none;
            margin-top: 20px;
            padding: 14px 16px;
            border: 1px solid #dfe4ee;
            border-radius: 8px;
            background: #f8fafc;
            color: var(--ink);
        }

        .privacy-callout strong {
            display: block;
            margin-bottom: 4px;
            font-size: 15px;
            letter-spacing: 0;
            text-transform: none;
        }

        .privacy-callout span {
            display: block;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.75;
        }

        .privacy-permission-list {
            max-width: none;
            border: 0;
        }

        .privacy-permission-list > div {
            display: block;
            padding: 0 0 12px;
            border: 0;
        }

        .privacy-permission-list dt,
        .privacy-permission-list dd { margin: 0; }

        .privacy-permission-list code {
            padding: 0;
            border: 0;
            background: transparent;
            font-size: 15px;
        }

        .privacy-permission-list dd { margin-top: 2px; }

        .contact-panel {
            display: block;
            max-width: none;
            padding: 0;
            border: 0;
            background: transparent;
        }

        .privacy-actions { margin-top: 20px; }

        @media (max-width: 640px) {
            .page-shell {
                width: auto;
                margin: 0;
                padding: 28px 20px;
                border-radius: 0;
            }

            .privacy-intro h1 { font-size: 25px; }

            .header-actions { font-size: 14px; }
        }
    </style>
</head>
<body class="privacy-page">
<a class="skip-link" href="#main-content"><?= e($copy['skip']) ?></a>
<div class="page-shell">
    <header class="site-header">
        <a class="brand" href="<?= e($linkVaultUrl) ?>" aria-label="<?= e($copy['home_label']) ?>">
            <span class="brand-mark" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.2 7.5h6.1a3.7 3.7 0 0 1 0 7.4H11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    <path d="M16.8 16.5h-6.1a3.7 3.7 0 0 1 0-7.4H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </span>
            <span class="brand-copy"><strong>LinkVault</strong><small><?= e($copy['extension_privacy']) ?></small></span>
        </a>
        <div class="header-actions">
            <a href="<?= e($languageUrl) ?>" lang="<?= e($alternateLanguage) ?>"><?= e($copy['switch_language']) ?></a>
            <a class="button button-secondary" href="<?= e($linkVaultUrl) ?>"><?= e($copy['back_home']) ?></a>
        </div>
    </header>

    <div class="layout">
        <aside class="policy-rail">
            <p class="rail-label"><?= e($copy['eyebrow']) ?></p>
            <nav class="policy-nav" aria-label="<?= e($copy['eyebrow']) ?>">
                <a href="#data"><?= e($copy['nav'][0]) ?></a>
                <a href="#purpose"><?= e($copy['nav'][1]) ?></a>
                <a href="#storage"><?= e($copy['nav'][2]) ?></a>
                <a href="#permissions"><?= e($copy['nav'][3]) ?></a>
                <a href="#contact"><?= e($copy['nav'][4]) ?></a>
            </nav>
            <div class="rail-rule" aria-hidden="true"></div>
        </aside>

        <main id="main-content" class="privacy-main" tabindex="-1">
            <header class="privacy-intro">
                <div>
                    <p class="public-report-eyebrow"><?= e($copy['eyebrow']) ?></p>
                    <h1><?= e($copy['title']) ?></h1>
                    <p><?= e($copy['intro']) ?></p>
                    <p class="updated"><?= e($copy['updated']) ?> <?= e(gmdate('Y-m-d')) ?></p>
                </div>
                <div class="intro-stamp" aria-hidden="true"><span><?= e($copy['extension_privacy']) ?></span></div>
            </header>

            <section id="data" class="privacy-section" aria-labelledby="data-title">
                <div class="section-heading">
                    <p class="public-report-eyebrow"><?= e($copy['sections'][0][0]) ?></p>
                    <h2 id="data-title"><?= e($copy['sections'][0][1]) ?></h2>
                </div>
                <div class="privacy-grid">
                    <?php foreach ($copy['data'] as $index => [$title, $description]): ?>
                        <article>
                            <span class="card-index"><?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?></span>
                            <h3><?= e($title) ?></h3>
                            <p><?= e($description) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="purpose" class="privacy-section" aria-labelledby="purpose-title">
                <div class="section-heading">
                    <p class="public-report-eyebrow"><?= e($copy['sections'][1][0]) ?></p>
                    <h2 id="purpose-title"><?= e($copy['sections'][1][1]) ?></h2>
                </div>
                <ul class="privacy-list">
                    <?php foreach ($copy['purpose'] as $item): ?>
                        <li><?= e($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section id="storage" class="privacy-section" aria-labelledby="storage-title">
                <div class="section-heading">
                    <p class="public-report-eyebrow"><?= e($copy['sections'][2][0]) ?></p>
                    <h2 id="storage-title"><?= e($copy['sections'][2][1]) ?></h2>
                </div>
                <div class="storage-copy">
                    <p><?= e($copy['storage'][0]) ?></p>
                    <p><?= e($copy['storage'][1]) ?></p>
                </div>
                <aside class="privacy-callout">
                    <strong><?= e($copy['important'][0]) ?></strong>
                    <span><?= e($copy['important'][1]) ?></span>
                </aside>
            </section>

            <section id="permissions" class="privacy-section" aria-labelledby="permissions-title">
                <div class="section-heading">
                    <p class="public-report-eyebrow"><?= e($copy['sections'][3][0]) ?></p>
                    <h2 id="permissions-title"><?= e($copy['sections'][3][1]) ?></h2>
                </div>
                <dl class="privacy-permission-list">
                    <?php foreach ($copy['permissions'] as [$permission, $description]): ?>
                        <div>
                            <dt><code><?= e($permission) ?></code></dt>
                            <dd><?= e($description) ?></dd>
                        </div>
                    <?php endforeach; ?>
                </dl>
            </section>

            <section id="contact" class="privacy-section" aria-labelledby="contact-title">
                <div class="section-heading">
                    <p class="public-report-eyebrow"><?= e($copy['sections'][4][0]) ?></p>
                    <h2 id="contact-title"><?= e($copy['sections'][4][1]) ?></h2>
                </div>
                <div class="contact-panel">
                    <p class="contact-copy">
                        <?php if ($contactEmail !== ''): ?>
                            <?= e($copy['contact'][0]) ?><a href="mailto:<?= e($contactEmail) ?>"><?= e($contactEmail) ?></a>.
                        <?php else: ?>
                            <?= e($copy['contact'][1]) ?>
                        <?php endif; ?>
                    </p>
                    <div class="privacy-actions"><a class="button button-secondary" href="<?= e($linkVaultUrl) ?>"><?= e($copy['contact'][2]) ?></a></div>
                </div>
            </section>
        </main>
    </div>
</div>
</body>
</html>
