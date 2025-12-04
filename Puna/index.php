<!doctype html>
<html lang="sq">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Erdi Krenzi — Full-Stack Developer</title>
<style>
:root{--bg:#f7f7f9;--panel:#fff;--muted:#6b6b78;--accent:#0b76ff;--gold:#caa43a;--radius:14px;--maxw:1100px}
[data-theme="dark"]{:root{--bg:#0b0e13;--panel:#0f1720;--muted:#9aa0a6;--accent:#58a6ff;--gold:#d4b15a}}
body{margin:0;font-family:Inter,sans-serif;background:var(--bg);color:var(--muted);}
.wrap{max-width:var(--maxw);margin:32px auto;padding:28px}
header,footer{display:flex;justify-content:space-between;align-items:center}
.card{background:var(--panel);padding:20px;border-radius:12px;margin-bottom:20px;}
input,textarea,select,button{padding:10px;border-radius:8px;border:1px solid rgba(0,0,0,0.1);width:100%}
</style>
</head>
<body data-theme="dark">
<div class="wrap">
<header>
<h1>Erdi Krenzi</h1>
<select id="lang"><option value="sq">Shqip</option><option value="en">English</option></select>
<button id="themeBtn">Light</button>
</header>
<main>
<section class="card">
<h2>Kontakt</h2>
<form method="post" action="">
<input type="text" name="contact_name" placeholder="Emri" required>
<input type="email" name="contact_email" placeholder="Email" required>
<textarea name="contact_message" placeholder="Mesazhi" required></textarea>
<button type="submit">Dërgo</button>
</form>
</section>
</main>
<footer>© 2025 Erdi Krenzi</footer>
<script>
const themeBtn=document.getElementById('themeBtn');
themeBtn.addEventListener('click',()=>{
 let cur=document.body.getAttribute('data-theme');
 document.body.setAttribute('data-theme',cur==='dark'?'light':'dark');
 themeBtn.textContent=cur==='dark'?'Dark':'Light';
});
</script>
</div>
</body>
</html>
