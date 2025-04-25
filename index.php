<?php
function count_proxies($file) {
  $path = __DIR__ . "/$file";
  return file_exists($path) ? count(array_filter(file($path))) : 0;
}
$http_count = count_proxies("http");
$socks4_count = count_proxies("socks4");
$socks5_count = count_proxies("socks5");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Casals Proxy List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #0f0f0f;
      font-family: 'Inter', sans-serif;
      color: #f3f4f6;
    }
    h1, h2 {
      font-weight: 700;
    }
    .proxy-card {
      background-color: #1a1a1a;
      border: 1px solid #2d2d2d;
      border-radius: 1rem;
      transition: all 0.3s ease;
    }
    .proxy-card:hover {
      transform: translateY(-4px);
      border-color: #6366f1;
      box-shadow: 0 0 12px rgba(99, 102, 241, 0.3);
    }
    .proxy-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }
    .card-title {
      color: #f9fafb;
    }
    .card-text {
      color: #9ca3af;
    }
    .faq-section {
      margin-top: 4rem;
    }
    .faq-question {
      font-weight: 600;
    }
    .section-title {
      margin-bottom: 1rem;
      color: #f3f4f6;
    }
    a {
      color: #60a5fa;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="text-center mb-5">
    <h1 class="text-white">Casals Proxy List</h1>
    <p class="text-muted">Updated every 30 minutes with new working proxies.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <a href="/http" class="text-decoration-none">
        <div class="card proxy-card text-center p-4">
          <i class="bi bi-globe2 proxy-icon text-primary"></i>
          <h5 class="card-title">HTTP</h5>
          <p class="card-text">HTTP + HTTPS proxies.<br><strong><?= $http_count ?> available</strong></p>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="/socks4" class="text-decoration-none">
        <div class="card proxy-card text-center p-4">
          <i class="bi bi-hdd-stack proxy-icon text-warning"></i>
          <h5 class="card-title">SOCKS4</h5>
          <p class="card-text">Basic SOCKS proxies without authentication.<br><strong><?= $socks4_count ?> available</strong></p>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="/socks5" class="text-decoration-none">
        <div class="card proxy-card text-center p-4">
          <i class="bi bi-diagram-3 proxy-icon text-info"></i>
          <h5 class="card-title">SOCKS5</h5>
          <p class="card-text">Modern proxies with UDP and authentication.<br><strong><?= $socks5_count ?> available</strong></p>
        </div>
      </a>
    </div>
  </div>

  <div class="faq-section mt-5">
    <h2 class="section-title">❓ FAQ</h2>
    <div class="mb-3">
      <p class="faq-question">Q: What is the purpose?</p>
      <p>A: The primary aim of this project is to gather the utmost quantity of HTTP, SOCKS4, or SOCKS5 proxies and meticulously analyze each of them to ascertain their current operational status. Furthermore, a key objective is to centralize all these proxies into a single, high-quality repository.</p>
    </div>
    <div class="mb-3">
      <p class="faq-question">Q: What is the timeout?</p>
      <p>A: The timeout for each proxy is 3 seconds for all protocols.</p>
    </div>
    <div class="mb-3">
      <p class="faq-question">Q: Where do you get the proxies from?</p>
      <p>A: The proxies used in this project are sourced from various open-source repositories on GitHub and other projects. If you would like to add a new source, please open an issue or contact me at <a href="mailto:santiago@casals.ar">santiago@casals.ar</a>.</p>
    </div>
  </div>

  <div class="mt-5">
    <h2 class="section-title">☁️ Official Website</h2>
    <p>The proxies are continuously updated and available at: <a href="https://proxy.casals.ar" target="_blank">https://proxy.casals.ar</a></p>
  </div>

  <div class="mt-5">
    <h2 class="section-title">☕ Donate</h2>
    <p>A small donation helps maintain this and other open-source projects. Thank you!</p>
  </div>

  <div class="text-center mt-5">
    <p class="text-muted small">&copy; <script>document.write(new Date().getFullYear())</script> Casals Proxy Manager. Created by <strong>Santicsls</strong>.</p>
  </div>
</div>

</body>
</html>
