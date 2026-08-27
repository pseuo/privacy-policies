<?php
$language = isset($_GET['lang']) && strtolower((string) $_GET['lang']) === 'zh' ? 'zh' : 'en';
$isEnglish = $language === 'en';
?>
<!doctype html>
<html lang="<?= $isEnglish ? 'en' : 'zh-CN' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $isEnglish ? 'vTab New Tab Privacy Policy' : 'vTab 极简新标签页 隐私政策' ?></title>
  <style>
    :root { color-scheme: light; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
    body { margin: 0; background: #f5f7fb; color: #202534; line-height: 1.75; }
    main { max-width: 860px; margin: 32px auto; padding: 40px 48px; background: #fff; border-radius: 14px; box-shadow: 0 8px 30px rgba(26, 39, 65, .08); }
    h1 { margin-top: 0; font-size: 30px; line-height: 1.3; }
    h2 { margin-top: 30px; font-size: 20px; }
    .updated { color: #6b7280; }
    li { margin: 6px 0; }
    a { color: #1769e0; }
    @media (max-width: 640px) { main { margin: 0; padding: 28px 20px; border-radius: 0; } h1 { font-size: 25px; } }
  </style>
</head>
<body>
<main>
  <p><a href="?lang=<?= $isEnglish ? 'zh' : 'en' ?>"><?= $isEnglish ? '中文' : 'English' ?></a></p>
<?php if ($isEnglish): ?>
  <h1>vTab New Tab Privacy Policy</h1>
  <p class="updated">Effective date: 2025-05-05</p>
  <p>Chinese version: <a href="https://go.boxove.com/privacy">https://go.boxove.com/privacy</a></p>
  <p>This Privacy Policy applies to vTab New Tab ("vTab", "we", "us", or "our"). vTab replaces the browser's New Tab page with a customizable bookmark, search, and productivity dashboard.</p>

  <h2>1. Information We Process</h2>
  <p>Depending on the features you use, vTab may process:</p>
  <ul>
    <li><strong>Authentication information:</strong> the user_id and token cookies associated with go.boxove.com. They are used to maintain your sign-in session and authenticate synchronization requests. vTab does not read login cookies from unrelated websites.</li>
    <li><strong>Account information:</strong> information you provide when registering, signing in, or linking an account, such as a user identifier, email address, or display name.</li>
    <li><strong>User-created content:</strong> bookmarks, URLs, shortcuts, notes, settings, wallpapers, files, or images that you add, select for synchronization, or upload.</li>
    <li><strong>Search information:</strong> search terms may be sent to Baidu when search suggestions are enabled, and to the search service selected by you when you submit a search.</li>
    <li><strong>Technical information:</strong> IP address, browser type, request time, and request logs may be received by our server for security, troubleshooting, and service operation.</li>
    <li><strong>Optional AI service information:</strong> if you configure and use an AI feature, prompts, text, or files submitted to that feature may be sent to the AI service endpoint selected by you. Nothing is sent when the feature is not enabled.</li>
  </ul>
  <p>vTab does not intentionally read your browsing history, passwords, payment information, or unrelated web page content. The bookmarks permission is used to display and manage bookmarks on the New Tab page. Selected bookmarks are uploaded only when you actively use synchronization.</p>

  <h2>2. How We Use Information</h2>
  <ul>
    <li>Provide the New Tab page, bookmark management, shortcuts, search, and customization features.</li>
    <li>Maintain your sign-in state and synchronize content that you choose to synchronize.</li>
    <li>Provide search suggestions, search results, website icons, and optional upload features at your request.</li>
    <li>Provide third-party sign-in or AI features that you actively enable.</li>
    <li>Prevent abuse, protect service security, troubleshoot issues, and improve the service.</li>
  </ul>

  <h2>3. Storage and Retention</h2>
  <p>Sign-in identifiers and some settings may be stored in browser cookies or local storage. Account data that you choose to synchronize is stored on servers at go.boxove.com and transmitted over HTTPS.</p>
  <p>We retain account and synchronized data while your account is active or for as long as necessary to provide the relevant features. You may request deletion of your account and associated data by contacting power@boxove.com. After a deletion request is completed, data in backups may remain for a limited backup cycle before being overwritten or deleted.</p>

  <h2>4. Sharing and Third-Party Services</h2>
  <p>We do not sell your personal information or use it for third-party targeted advertising. Information is shared only as necessary to provide the features:</p>
  <ul>
    <li>With go.boxove.com for authentication, synchronization, and vTab features.</li>
    <li>With the search service selected by you, including Baidu, when you request search suggestions or submit a search.</li>
    <li>With QQ, WeChat, or another authentication provider when you voluntarily use that sign-in method.</li>
    <li>With the AI service endpoint selected by you when you voluntarily configure and use an AI feature. That provider's privacy policy applies to its processing.</li>
    <li>With hosting, security, storage, or operations providers that support the service and are subject to confidentiality and security obligations.</li>
    <li>When required by law or necessary to protect users and the security of the service.</li>
  </ul>
  <p>We do not send your vTab login token to search services.</p>

  <h2>5. Your Choices and Deletion Requests</h2>
  <ul>
    <li>You can disable search suggestions, stop synchronization, or sign out in vTab settings.</li>
    <li>You can remove the extension or clear browser site data to delete locally stored information.</li>
    <li>Removing the extension does not automatically delete data already synchronized to our servers. Email power@boxove.com to request deletion of your account or server-side synchronized data.</li>
  </ul>

  <h2>6. Security</h2>
  <p>We use HTTPS and reasonable technical and organizational measures to reduce the risk of unauthorized access, alteration, disclosure, or loss. No method of transmission or storage is completely secure.</p>

  <h2>7. Children's Privacy</h2>
  <p>vTab is not directed to children below the age required by applicable law, and we do not knowingly collect children's personal information.</p>

  <h2>8. Changes to This Policy</h2>
  <p>We may update this policy when features, legal requirements, or data practices change. The updated policy will remain available on this page with a revised effective date.</p>

  <h2>9. Contact Us</h2>
  <p>For questions about this policy, personal information, or data deletion, contact <a href="mailto:power@boxove.com">power@boxove.com</a>.</p>
<?php else: ?>
  <h1>vTab 极简新标签页 隐私政策</h1>
  <p class="updated">生效日期：2025-05-05</p>
  <p>本隐私政策适用于 vTab 极简新标签页（以下简称“vTab”“本扩展”）。本扩展将浏览器新标签页替换为可自定义的书签、搜索和生产力面板。</p>

  <h2>一、我们处理的信息</h2>
  <p>根据你使用的功能，vTab 可能处理以下信息：</p>
  <ul>
    <li><strong>认证信息：</strong>读取与 go.boxove.com 关联的 user_id 和 token Cookie，并在浏览器本地存储登录状态，用于维持登录和验证同步请求。vTab 不读取其他网站的登录 Cookie。</li>
    <li><strong>账户信息：</strong>你主动注册、登录或绑定账户时提交的用户标识、邮箱、昵称等信息。</li>
    <li><strong>用户创建内容：</strong>你主动添加或选择同步的书签、网址、快捷方式、笔记、设置、壁纸以及主动上传的文件或图片。</li>
    <li><strong>搜索信息：</strong>启用搜索建议时，你输入的搜索词可能发送给百度以返回搜索建议；提交搜索时，搜索词会发送给你选择的搜索服务。</li>
    <li><strong>技术信息：</strong>为安全、故障排查和服务运行，服务器可能接收 IP 地址、浏览器类型、请求时间和请求日志等基本技术信息。</li>
    <li><strong>可选 AI 服务信息：</strong>如果你主动配置并使用 AI 功能，你提交给该功能的提示词、文本或文件可能发送到你选择的 AI 服务地址。未启用该功能时不会发送。</li>
  </ul>
  <p>vTab 不主动读取你的浏览历史、密码、支付信息或无关网页内容。书签权限仅用于在新标签页展示和管理书签；只有在你主动使用同步功能时，所选书签才会上传。</p>

  <h2>二、使用目的</h2>
  <ul>
    <li>提供新标签页、书签管理、快捷入口、搜索和页面自定义功能。</li>
    <li>维护账户登录状态，并同步你主动选择同步的内容。</li>
    <li>根据你的请求提供搜索建议、搜索结果、图标和可选的上传功能。</li>
    <li>提供你主动启用的第三方登录或 AI 服务。</li>
    <li>防止滥用、保障服务安全、排查故障和改进服务。</li>
  </ul>

  <h2>三、存储方式和保存期限</h2>
  <p>登录标识和部分设置可能保存在浏览器 Cookie 或本地存储中。你主动同步的账户数据保存在 go.boxove.com 服务器上，并通过 HTTPS 传输。</p>
  <p>我们会在账户存续期间或提供相关功能所必需的期限内保存账户和同步数据。你可以通过 power@boxove.com 请求删除账户及关联数据。删除请求处理完成后，备份中的数据可能因备份周期在有限期限内保留，之后被覆盖或删除。</p>

  <h2>四、共享和第三方服务</h2>
  <p>我们不出售你的个人信息，也不将其用于第三方定向广告。仅在提供功能所必需的范围内共享：</p>
  <ul>
    <li>与 go.boxove.com 共享认证信息和你主动同步的内容，用于登录、同步和扩展功能。</li>
    <li>当你启用搜索建议或提交搜索时，与所选搜索服务（包括百度）共享搜索词。</li>
    <li>当你主动使用 QQ、微信或其他登录方式时，与相应身份认证服务共享完成登录所必需的信息。</li>
    <li>当你主动配置 AI 服务时，与你选择的 AI 服务地址共享该功能所需的提示词、文本、文件或 API 请求信息。该服务的隐私政策由其独立负责。</li>
    <li>与为我们提供主机、安全、存储或运维服务的供应商共享必要的技术信息；供应商须承担相应的保密和安全义务。</li>
    <li>在法律要求、司法程序或保护用户和服务安全所必需时披露相关信息。</li>
  </ul>
  <p>我们不会向搜索服务发送你的 vTab 登录 token。</p>

  <h2>五、你的选择和删除请求</h2>
  <ul>
    <li>你可以在 vTab 设置中关闭搜索建议、停止同步或退出账户。</li>
    <li>你可以移除扩展或清除浏览器站点数据，以删除本地保存的信息。</li>
    <li>移除扩展不会自动删除已同步到服务器的数据。请发送邮件至 power@boxove.com 申请删除账户或服务器上的同步数据。</li>
  </ul>

  <h2>六、安全措施</h2>
  <p>我们使用 HTTPS 等合理的技术和管理措施保护信息，降低未经授权访问、篡改、泄露或丢失的风险。但任何网络传输和存储方式都不能保证绝对安全。</p>

  <h2>七、儿童隐私</h2>
  <p>vTab 不面向适用法律规定年龄以下的儿童提供服务，也不会在明知的情况下收集儿童个人信息。</p>

  <h2>八、政策更新</h2>
  <p>当功能、法律要求或数据处理方式发生变化时，我们会更新本政策并修改生效日期。更新后的政策会继续发布在本页面。</p>

  <h2>九、联系我们</h2>
  <p>如对本政策、个人信息处理或数据删除有疑问，请联系：<a href="mailto:power@boxove.com">power@boxove.com</a>。</p>
<?php endif; ?>
</main>
</body>
</html>
