<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>الموقع قيد التطوير</title>
 <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
  font-family: 'IBM Plex Sans Arabic', sans-serif;
      background: linear-gradient(to bottom, #F0F7FF, #DCEBFA);
      color: #003366;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
    }

    .container {
      background: #ffffff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      max-width: 700px;
      width: 100%;
    }

    .logo {
      margin-bottom: 30px;
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    h1 {
      font-size: 2.5rem;
      color: #003090;
      margin-bottom: 20px;
    }

    .dynamic-text {
      font-size: 1.3rem;
      color: #333;
      height: 50px;
      transition: opacity 0.6s ease;
    }

    .loader {
      width: 60px;
      height: 60px;
      border: 6px solid rgba(0, 96, 200, 0.2);
      border-top: 6px solid #005FDC;
      border-radius: 50%;
      animation: spin 1.2s linear infinite;
      margin: 30px auto 0;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    @media (max-width: 600px) {
      h1 { font-size: 2rem; }
      .dynamic-text { font-size: 1rem; }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <!-- logo -->
      <svg width="143" height="213" viewBox="0 0 143 213" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 142H71V213H34.918C15.6333 213 0 197.367 0 178.082V142Z" fill="#003090"/>
        <path d="M0 71H36.082C55.3667 71 71 86.6333 71 105.918V142H0V71Z" fill="#005FDC"/>
        <path d="M0 34.918C0 15.6333 15.6333 0 34.918 0H71V36.082C71 55.3667 55.3667 71 36.082 71H0V34.918Z" fill="#0083FF"/>
        <path d="M75.0737 0C92.9008 0 109.998 7.49566 122.603 20.838C135.209 34.1804 142.291 52.2765 142.291 71.1455C142.291 90.0144 135.209 108.111 122.603 121.453C109.998 134.795 92.9009 142.291 75.0737 142.291L75.0737 0Z" fill="#005FDC"/>
      </svg>
    </div>
    <h1>قريباً... موقع استثنائي!</h1>
    <p class="dynamic-text" id="text-message">
منصة استثنائية تجمع التدريب، التطوير، والفرص في مكان واحد.
        </p>
        
    <div class="loader"></div>
  </div>

  <script>
const messages = [
  "منصة استثنائية تجمع التدريب، التطوير، والفرص في مكان واحد.",
  "نضع اللمسات الأخيرة على تجربة رقمية تُحدث فرقاً حقيقياً.", 
  "قريباً... كل ما تحتاجه لتطوير مهاراتك أو توسيع نطاق أعمالك التدريبية." 
];


    let index = 0;
    const textEl = document.getElementById('text-message');

    setInterval(() => {
      index = (index + 1) % messages.length;
      textEl.style.opacity = 0;

      setTimeout(() => {
        textEl.textContent = messages[index];
        textEl.style.opacity = 1;
      }, 500);
    }, 4000);
  </script>
</body>
</html>
