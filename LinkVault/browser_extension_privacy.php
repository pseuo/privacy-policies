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
$languageUrl = getenv('STATIC_EXPORT') === '1'
    ? ($alternateLanguage === 'zh' ? 'zh.html' : 'index.html')
    : '?lang=' . $alternateLanguage;
$linkVaultUrl = 'https://github.com/pseuo/LinkVault';
$contactEmail = isset($contact) ? trim((string) $contact) : '';
?>
<!doctype html>
<html lang="<?= $language === 'zh' ? 'zh-CN' : 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#f6f8f0">
    <meta name="description" content="<?= e($copy['meta']) ?>">
    <title><?= e($copy['page_title']) ?></title>
    <!-- ============================================================
         LinkVault 扩展隐私页 · 设计系统
         ------------------------------------------------------------
         与 SlowScroll / 索引页同源：同一套极光背景、玻璃层、排版刻度，
         三个页面因此看起来像同一个产品家族的手笔。品牌色取首页卡片
         已定义的青柠绿（--card-accent: linkvault），与另两个产品区分。

         ⚠ 四条硬约束，改动时一并守住：

           1. WCAG AA 是底线（正文 ≥ 4.5:1，非文本 ≥ 3:1）。
              玻璃是半透明层，文字最终颜色取决于背后极光色团的强度，
              所以所有文字色都按「最差叠加背景」选取，而不是取色卡标称值。
              改 --glass-fill 的透明度时，必须回头复核这些文字色。

           2. 零外部请求：无 CDN、无 web font、无统计脚本。
              玻璃与极光都是纯 CSS，不产生请求，因此这个约束拦不住视觉升级。
              字体走系统栈——在一份宣称「不收集」的页面上加载第三方
              字体，是自相矛盾的。

           3. prefers-reduced-motion 下所有动效归零。

           4. 单一数据源：全部文案只存在于上方 $copy 数组里，
              模板只负责摆放。新增一段文案 = 往数组里加一项，
              不要在下面的 HTML 里复制文字。
         ============================================================ -->
    <style>
        /* ============================================================
           1 · Tokens
           ============================================================ */
        :root {
            color-scheme: light;

            /* ---- Brand Ramp（青柠绿，与首页 LinkVault 卡片同源） ---- */
            --brand-50:  #f4f8e9;
            --brand-100: #e7efd3;
            --brand-300: #b9d07e;
            --brand-500: #6d8a22;   /* 大字/非文本 3.96:1 */
            --brand-600: #566d15;   /* 正文前景 5.84:1，达 AA */
            --grad-from: #86a72c;
            --grad-to:   #4f6b12;

            /* ---- Semantic ---- */
            --color-info:     #1769e0;
            --color-success:  #047857;
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

                --brand-50:  #1d2413;
                --brand-100: #2a3319;
                --brand-300: #c3dc8a;
                --brand-500: #a8cc4a;   /* 与首页暗色卡片同值 */
                --brand-600: #c3dc8a;
                --grad-from: #a8cc4a;
                --grad-to:   #6d8a22;

                --text-strong: #f2f5fb;
                --text-body:   #cbd3e1;
                --text-muted:  #97a1b5;

                --color-info:    #93c5fd;
                --color-success: #34d399;
                --color-warn-ink:#f59e0b;

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
            background: #f6f8f0;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        h1, h2, h3 { margin: 0; color: var(--text-strong); line-height: 1.3; }
        p { margin: 0; }
        ul, ol, dl, dd { margin: 0; padding: 0; }
        li { list-style: none; }
        a { color: var(--color-info); text-decoration-thickness: 1px; text-underline-offset: 3px; }
        a:hover { color: var(--brand-600); }
        @media (prefers-color-scheme: dark) { a:hover { color: var(--brand-300); } }

        code, pre, kbd {
            font-family: var(--font-mono);
            font-size: .9em;
        }
        code {
            padding: .12em .4em;
            border-radius: 6px;
            background: var(--glass-fill-subtle);
            border: 1px solid var(--glass-stroke-soft);
            color: var(--text-strong);
            white-space: nowrap;
        }

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
        .lv-aurora {
            position: fixed;
            inset: 0;
            z-index: -1;
            background:
                radial-gradient(1100px 600px at 12% -8%, rgba(154, 190, 60, .28), transparent 62%),
                radial-gradient(960px 520px at 92% 4%,   rgba(126, 200, 130, .22), transparent 60%),
                radial-gradient(900px 620px at 78% 96%,  rgba(214, 190, 90, .20), transparent 62%),
                radial-gradient(760px 520px at 4% 88%,   rgba(109, 138, 34, .22),  transparent 60%),
                linear-gradient(168deg, #f6f8f0 0%, #eef2e4 46%, #f7f5ee 100%);
        }
        @media (prefers-color-scheme: dark) {
            body { background: #12140e; }
            .lv-aurora {
                background:
                    radial-gradient(1100px 600px at 12% -8%, rgba(154, 190, 60, .22), transparent 62%),
                    radial-gradient(960px 520px at 92% 4%,   rgba(126, 200, 130, .16), transparent 60%),
                    radial-gradient(900px 620px at 78% 96%,  rgba(214, 190, 90, .14), transparent 62%),
                    radial-gradient(760px 520px at 4% 88%,   rgba(109, 138, 34, .20),  transparent 60%),
                    linear-gradient(168deg, #12140e 0%, #171a11 48%, #101208 100%);
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
            max-width: 1120px;
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

        .topbar__actions {
            display: flex;
            align-items: center;
            gap: var(--space-2);
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
        .pill--solid {
            background: linear-gradient(135deg, var(--grad-from), var(--grad-to));
            border-color: transparent;
            color: var(--text-inverse);
            box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset,
                        0 6px 18px rgba(79, 107, 18, .28);
        }
        .pill--solid:hover { color: var(--text-inverse); }
        @media (prefers-color-scheme: dark) {
            .pill--solid {
                color: #12140e;
                box-shadow: 0 1px 0 rgba(255, 255, 255, .22) inset,
                            0 6px 18px rgba(0, 0, 0, .4);
            }
            .pill--solid:hover { color: #12140e; }
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
            max-width: 20ch;
            margin-top: var(--space-4);
            font-size: var(--text-3xl);
            font-weight: 650;
            letter-spacing: -.025em;
            line-height: 1.18;
        }

        .hero__lede {
            max-width: 60ch;
            margin-top: var(--space-4);
            color: var(--text-body);
            font-size: var(--text-lg);
            line-height: 1.7;
        }

        .meta {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-3);
            margin-top: var(--space-6);
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
        }
        .meta dt {
            color: var(--text-muted);
            font-size: var(--text-xs);
            font-weight: 600;
            letter-spacing: .04em;
        }
        .meta dd {
            color: var(--text-strong);
            font-size: var(--text-sm);
            font-weight: 650;
        }
        .meta dd a { color: var(--color-info); font-weight: 650; text-decoration: none; }
        .meta dd a:hover { text-decoration: underline; }

        /* ============================================================
           7 · Layout
           ⚠ 列宽必须与 DOM 顺序对齐：固定宽列在前（目录 260px），
              弹性列在后给正文；minmax(0,…) 保证长内容只撑内部滚动、
              不参与轨道下限计算。两列都写 1fr 会把宽列判给目录，
              正文被挤进窄列并撑出横向溢出。
           ============================================================ */
        .layout {
            display: grid;
            grid-template-columns: 260px minmax(0, 1fr);
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
            .hero__lede { font-size: var(--text-base); }
            .topbar { margin-bottom: var(--space-8); }
        }

        /* ============================================================
           8 · Chapter
           ============================================================ */
        .chapter {
            margin-bottom: var(--space-12);
            scroll-margin-top: var(--space-8);
        }
        .chapter__h {
            position: relative;
            padding-bottom: var(--space-3);
            margin-bottom: var(--space-5);
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
        .chapter__num {
            display: block;
            margin-bottom: var(--space-2);
            color: var(--brand-600);
            font-size: var(--text-xs);
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }
        .chapter__p {
            max-width: var(--measure);
            margin-bottom: var(--space-4);
        }

        /* ---- 玻璃卡 ---- */
        .glass-card {
            position: relative;
            min-width: 0;
            overflow-wrap: break-word;
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

        /* ---- 数据网格：2×2 ---- */
        .data-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: var(--space-3);
        }
        .data-card {
            padding: var(--space-5);
            border-radius: var(--radius-md);
            background: var(--glass-fill);
            -webkit-backdrop-filter: blur(var(--glass-blur)) saturate(var(--glass-saturate));
                    backdrop-filter: blur(var(--glass-blur)) saturate(var(--glass-saturate));
            border: 1px solid var(--glass-stroke);
            box-shadow: var(--shadow-sm), var(--shadow-inset-top);
            transition: transform var(--dur-normal) var(--ease-out),
                        box-shadow var(--dur-normal) var(--ease-out);
        }
        .data-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md), var(--shadow-inset-top);
        }
        .data-card__index {
            display: inline-grid;
            place-items: center;
            width: 26px;
            height: 26px;
            margin-bottom: var(--space-3);
            border-radius: 8px;
            background: var(--brand-100);
            color: var(--brand-600);
            font-family: var(--font-mono);
            font-size: var(--text-xs);
            font-weight: 700;
        }
        @media (prefers-color-scheme: dark) {
            .data-card__index { background: rgba(168, 204, 74, .16); color: var(--brand-300); }
        }
        .data-card__title {
            margin-bottom: var(--space-2);
            font-size: var(--text-md);
            font-weight: 650;
            letter-spacing: -.01em;
        }
        .data-card__text {
            min-width: 0;
            color: var(--text-body);
            font-size: var(--text-sm);
            line-height: 1.7;
            overflow-wrap: break-word;
        }

        /* ---- 勾选清单 ---- */
        .bullets {
            display: grid;
            gap: var(--space-2);
            max-width: var(--measure);
        }
        /* min-width:0 + overflow-wrap：长 URL / Bearer Token / HTTP(S) URL
           在窄屏下换行而不是撑破容器。缺了这两条，390px 下横向溢出、
           正文右侧被裁掉。 */
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
        }
        /* 用 ::before 画勾而非 list-style，避免不同浏览器默认标记不一 */
        .bullets li::before {
            content: "";
            position: absolute;
            left: var(--space-4);
            top: calc(var(--space-3) + .3em);
            width: 15px;
            height: 8px;
            border-left: 2px solid var(--brand-600);
            border-bottom: 2px solid var(--brand-600);
            transform: rotate(-45deg);
        }

        /* ---- 提示块 ---- */
        .note {
            position: relative;
            display: flex;
            gap: var(--space-3);
            max-width: var(--measure);
            margin-top: var(--space-5);
            padding: var(--space-4) var(--space-5);
            border-radius: var(--radius-md);
            background: var(--glass-fill-subtle);
            border: 1px solid var(--glass-stroke-soft);
            border-left: 3px solid var(--color-warn-ink);
        }
        .note__mark {
            flex: none;
            width: 20px;
            height: 20px;
            margin-top: 3px;
            border-radius: 50%;
            background: var(--color-warn-ink);
            color: #ffffff;
            font-size: var(--text-xs);
            font-weight: 700;
            line-height: 20px;
            text-align: center;
        }
        .note__title {
            display: block;
            color: var(--text-strong);
            font-size: var(--text-sm);
            font-weight: 700;
        }
        .note__text {
            color: var(--text-body);
            font-size: var(--text-sm);
            line-height: 1.7;
        }

        /* ---- 权限表 ---- */
        /* min-width:0 是必需的：外层是 grid/flex 的弹性项时，
           默认 min-width:auto 会让 .table-wrap 被 table 的 min-width:460px
           撑开，overflow-x:auto 形同虚设，整页横向溢出。 */
        .table-wrap {
            min-width: 0;
            max-width: 100%;
            margin-bottom: var(--space-4);
            overflow-x: auto;              /* 窄屏横向滚动，不撑破布局 */
            border-radius: var(--radius-md);
            border: 1px solid var(--glass-stroke-soft);
            background: var(--glass-fill-subtle);
        }
        .table {
            width: 100%;
            min-width: 460px;
            border-collapse: collapse;
            font-size: var(--text-sm);
        }
        .table th, .table td {
            padding: var(--space-3) var(--space-4);
            text-align: left;
            vertical-align: top;
            line-height: 1.65;
        }
        /* 行首为 scope="row"，读屏可播报列名 */
        .table tbody th {
            width: 34%;
            color: var(--text-strong);
            font-weight: 600;
        }
        .table tbody tr + tr th,
        .table tbody tr + tr td { border-top: 1px solid var(--glass-stroke-soft); }
        .table td { color: var(--text-body); }

        /* 窄屏下取消 min-width：表格只有两列，堆叠显示比横向滚动
           好得多。min-width 是为「宽表格在中等屏幕不压缩」准备的，
           权限表用不上，强行保留只会让 375px 屏一进来就横向溢出。 */
        @media (max-width: 620px) {
            .table { min-width: 0; }
            .table tbody th { width: auto; }
            .table tbody th,
            .table tbody td {
                display: block;
                width: auto;
                padding: var(--space-2) 0;
            }
            .table tbody tr { padding: var(--space-3) 0; }
            .table tbody tr + tr th { padding-top: var(--space-4); }
            .table tbody td { padding-top: 0; }
        }

        /* ---- 联系面板 ---- */
        .contact {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: var(--space-5);
            padding: var(--space-6);
        }
        .contact__copy {
            max-width: 52ch;
            color: var(--text-body);
            font-size: var(--text-base);
            line-height: 1.7;
        }
        .contact__copy a { font-weight: 650; }

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
            .lv-aurora { display: none; }
            body { background: #ffffff; color: #000000; font-size: 11pt; }
            .page { max-width: none; padding: 0; }
            .layout { display: block; }
            .toc { display: none; }             /* 打印时目录无价值，占篇幅 */
            .topbar__actions { display: none; }
            .skip-link { display: none; }
            .glass-card, .data-card, .contact, .meta__item {
                background: none; border: none; box-shadow: none; padding-left: 0; padding-right: 0;
            }
            .note, .bullets li, .table-wrap {
                background: none;
                border: 1px solid #cccccc;
            }
            .pill--solid {
                background: none;
                color: #000000;
                border: 1px solid #000000;
                box-shadow: none;
            }
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
<div class="lv-aurora" aria-hidden="true"></div>

<!-- 跳到主内容：键盘用户按 Tab 首项即可越过目录 -->
<a class="skip-link" href="#main-content"><?= e($copy['skip']) ?></a>

<div class="page">
    <header class="topbar">
        <a class="brand" href="<?= e($linkVaultUrl) ?>" aria-label="<?= e($copy['home_label']) ?>">
            <!-- 品牌标记内联：避免对外链图片的请求，也避免图标 404 时留破图 -->
            <svg class="brand-mark" viewBox="0 0 32 32" width="30" height="30" aria-hidden="true" focusable="false">
                <defs>
                    <linearGradient id="lvBrandGrad" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0" stop-color="#86a72c" />
                        <stop offset="1" stop-color="#4f6b12" />
                    </linearGradient>
                </defs>
                <rect x="1" y="1" width="30" height="30" rx="9" fill="url(#lvBrandGrad)" />
                <g fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round">
                    <path d="M13.6 12.4h4.2a3.6 3.6 0 0 1 0 7.2h-1.9" />
                    <path d="M18.4 19.6h-4.2a3.6 3.6 0 0 1 0-7.2h1.9" />
                </g>
            </svg>
            <span>
                LinkVault
                <span class="brand__sub"><?= e($copy['extension_privacy']) ?></span>
            </span>
        </a>
        <div class="topbar__actions">
            <a class="pill" href="<?= e($languageUrl) ?>" hreflang="<?= e($alternateLanguage) ?>" rel="alternate"><?= e($copy['switch_language']) ?></a>
            <a class="pill pill--solid" href="<?= e($linkVaultUrl) ?>"><?= e($copy['back_home']) ?></a>
        </div>
    </header>

    <header class="hero">
        <p class="eyebrow"><?= e($copy['eyebrow']) ?></p>
        <h1 class="hero__title"><?= e($copy['title']) ?></h1>
        <p class="hero__lede"><?= e($copy['intro']) ?></p>
        <dl class="meta">
            <div class="meta__item">
                <dd><?= e($copy['updated']) ?> <?= e(gmdate('Y-m-d')) ?></dd>
            </div>
            <div class="meta__item">
                <dt><?= $language === 'zh' ? '文档语言' : 'Language' ?></dt>
                <dd><?= $language === 'zh' ? '中文' : 'English' ?></dd>
            </div>
        </dl>
    </header>

    <div class="layout">
        <!-- 目录：桌面侧栏，移动端折到正文上方 -->
        <nav class="toc" aria-label="<?= e($copy['eyebrow']) ?>">
            <p class="toc__title"><?= e($copy['eyebrow']) ?></p>
            <ul class="toc__list">
                <?php foreach (['data', 'purpose', 'storage', 'permissions', 'contact'] as $index => $anchor): ?>
                    <li><a href="#<?= e($anchor) ?>"><?= e($copy['nav'][$index]) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <main id="main-content" class="main" tabindex="-1">
            <section class="chapter" aria-labelledby="data-title">
                <h2 id="data-title" class="chapter__h">
                    <span class="chapter__anchor" id="data" aria-hidden="true"></span>
                    <span class="chapter__num"><?= e($copy['sections'][0][0]) ?></span>
                    <?= e($copy['sections'][0][1]) ?>
                </h2>
                <div class="data-grid">
                    <?php foreach ($copy['data'] as $index => [$title, $description]): ?>
                        <article class="data-card">
                            <span class="data-card__index" aria-hidden="true"><?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?></span>
                            <h3 class="data-card__title"><?= e($title) ?></h3>
                            <p class="data-card__text"><?= e($description) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="chapter" aria-labelledby="purpose-title">
                <h2 id="purpose-title" class="chapter__h">
                    <span class="chapter__anchor" id="purpose" aria-hidden="true"></span>
                    <span class="chapter__num"><?= e($copy['sections'][1][0]) ?></span>
                    <?= e($copy['sections'][1][1]) ?>
                </h2>
                <ul class="bullets">
                    <?php foreach ($copy['purpose'] as $item): ?>
                        <li><?= e($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="chapter" aria-labelledby="storage-title">
                <h2 id="storage-title" class="chapter__h">
                    <span class="chapter__anchor" id="storage" aria-hidden="true"></span>
                    <span class="chapter__num"><?= e($copy['sections'][2][0]) ?></span>
                    <?= e($copy['sections'][2][1]) ?>
                </h2>
                <div class="glass-card contact">
                    <div class="contact__copy">
                        <?php foreach ($copy['storage'] as $paragraph): ?>
                            <p class="chapter__p"><?= e($paragraph) ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <aside class="note">
                    <span class="note__mark" aria-hidden="true">!</span>
                    <p class="note__text">
                        <strong class="note__title"><?= e($copy['important'][0]) ?></strong>
                        <?= e($copy['important'][1]) ?>
                    </p>
                </aside>
            </section>

            <section class="chapter" aria-labelledby="permissions-title">
                <h2 id="permissions-title" class="chapter__h">
                    <span class="chapter__anchor" id="permissions" aria-hidden="true"></span>
                    <span class="chapter__num"><?= e($copy['sections'][3][0]) ?></span>
                    <?= e($copy['sections'][3][1]) ?>
                </h2>
                <div class="table-wrap">
                    <table class="table">
                        <tbody>
                            <?php foreach ($copy['permissions'] as [$permission, $description]): ?>
                                <tr>
                                    <th scope="row"><code><?= e($permission) ?></code></th>
                                    <td><?= e($description) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="chapter" aria-labelledby="contact-title">
                <h2 id="contact-title" class="chapter__h">
                    <span class="chapter__anchor" id="contact" aria-hidden="true"></span>
                    <span class="chapter__num"><?= e($copy['sections'][4][0]) ?></span>
                    <?= e($copy['sections'][4][1]) ?>
                </h2>
                <div class="glass-card contact">
                    <p class="contact__copy">
                        <?php if ($contactEmail !== ''): ?>
                            <?= e($copy['contact'][0]) ?><a href="mailto:<?= e($contactEmail) ?>"><?= e($contactEmail) ?></a>.
                        <?php else: ?>
                            <?= e($copy['contact'][1]) ?>
                        <?php endif; ?>
                    </p>
                    <div><a class="pill pill--solid" href="<?= e($linkVaultUrl) ?>"><?= e($copy['contact'][2]) ?></a></div>
                </div>
            </section>
        </main>
    </div>

    <footer class="footer">
        <p class="footer__note">LinkVault</p>
    </footer>
</div>
</body>
</html>