<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hoosier 
    sOnline</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
:root {
    --bg: #f4f5f7;
    --text: #1c1c1c;
    --muted: #6b7280;
    --accent: #2f5cff;
    --card: #ffffff;
}

* { box-sizing: border-box; }

body {
    margin: 0;
    font-family: "Inter", sans-serif;
    background: var(--bg);
    color: var(--text);
}

/* Layout */
.wrap {
    max-width: 900px;
    margin: auto;
    padding: 60px 20px;
}

/* Hero */
.hero {
    display: grid;
    gap: 20px;
}

.hero h1 {
    font-size: 34px;
    line-height: 1.25;
    font-weight: 600;
    letter-spacing: -0.5px;
}

.hero p {
    font-size: 17px;
    color: var(--muted);
}

/* Divider line */
.line {
    width: 60px;
    height: 3px;
    background: var(--accent);
    margin: 20px 0;
    border-radius: 2px;
}

/* Card sections */
.section {
    margin-top: 40px;
    display: grid;
    gap: 18px;
}

.card {
    background: var(--card);
    padding: 22px;
    border-radius: 14px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.04);
    transition: transform 0.15s ease;
}

.card:hover {
    transform: translateY(-2px);
}

/* List */
ul {
    padding-left: 18px;
    margin: 10px 0;
}

/* CTA */
.cta {
    margin-top: 30px;
}

button {
    width: 100%;
    padding: 15px;
    background: var(--accent);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    opacity: 0.92;
}

/* Footer */
.footer {
    margin-top: 60px;
    font-size: 13px;
    color: var(--muted);
}

/* Subtle animation */
.fade {
    opacity: 0;
    transform: translateY(10px);
    animation: fadeIn 0.6s forwards;
}

.fade:nth-child(2) { animation-delay: 0.1s; }
.fade:nth-child(3) { animation-delay: 0.2s; }
.fade:nth-child(4) { animation-delay: 0.3s; }

@keyframes fadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
</head>

<body>

<div class="wrap">

<!-- HERO -->
<div class="hero fade">
    <h1>Hey — I’m Adam f.<br>I help local businesses show up the way they should on Google.</h1>

    <p>
    I’ve been looking at businesses around East Central Indiana — Anderson, Muncie, Richmond — and a lot of them have the same issue.
    </p>

    <p>
    They’re good businesses. But when you search for them, their Google listing doesn’t fully reflect that.
    </p>

    <div class="line"></div>

    <p>
    That usually means missed calls, missed visits, and people choosing the next option instead.
    </p>

    <div class="cta">
        <button onclick="checkout()">Fix My Google Listing</button>
        <div style="margin-top:8px;color:#6b7280;font-size:13px;">
            One-time setup. I usually start within 24 hours.
        </div>
    </div>
</div>

<!-- WHAT I DO -->
<div class="section fade">
    <div class="card">
        <strong>What I actually do</strong>
        <p class="muted">
        This isn’t marketing or “SEO.” It’s just fixing your Google Business Profile so it works the way it’s supposed to.
        </p>

        <ul>
            <li>Make sure Google clearly understands what your business is</li>
            <li>Fix missing or inconsistent contact details</li>
            <li>Improve how you show up in Search and Maps</li>
            <li>Make your listing feel complete and trustworthy</li>
        </ul>

        <p class="muted">
        Most of the time, it’s small things that just never got cleaned up.
        </p>
    </div>
</div>

<!-- LOCAL CONTEXT -->
<div class="section fade">
    <div class="card">
        <strong>Why I’m doing this</strong>
        <p>
        I’m based here in Indiana too.
        </p>

        <p class="muted">
        I kept seeing businesses around Anderson, Muncie, and Richmond not showing up the way they should — even when they’re clearly good at what they do.
        </p>

        <p class="muted">
        Around here, people don’t dig around. They search, glance, and decide fast.
        </p>
    </div>
</div>

<!-- PROCESS -->
<div class="section fade">
    <div class="card">
        <strong>What happens after you click</strong>

        <p><strong>Day 1:</strong> I go through your listing and fix the structure</p>
        <p><strong>Week 1:</strong> Everything becomes cleaner and more consistent</p>
        <p><strong>Week 1–2:</strong> You typically start seeing better visibility</p>

        <p class="muted">
        No meetings. No drawn-out process.
        </p>
    </div>
</div>

<!-- CTA AGAIN -->
<div class="cta fade">
    <button onclick="checkout()">Fix My Google Listing</button>
</div>

<!-- FOOTER -->
<div class="footer fade">
    HoosierOnline • East Central Indiana
</div>

</div>

<script>
function checkout() {
    window.location.href = "https://buy.stripe.com/eVqdR9ggibl26A833WgMw00";
}
</script>

</body>
</html>
