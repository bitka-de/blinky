<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div class="relative layout">
        <div class="absolute top-0 z-10 flex h-36 w-full items-start bg-gradient-to-t from-neutral-300" style="clip-path: polygon(100% 0, 100% 84%, 50% 100%, 0 84%, 0% 0%)">
            <button class="share-button absolute top-1.5 right-1.5 z-30">
                <span class="hidden sm:block">Share</span>
                <svg class="h-5" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M214 112v96a14 14 0 0 1-14 14H56a14 14 0 0 1-14-14v-96a14 14 0 0 1 14-14h24a6 6 0 0 1 0 12H56a2 2 0 0 0-2 2v96a2 2 0 0 0 2 2h144a2 2 0 0 0 2-2v-96a2 2 0 0 0-2-2h-24a6 6 0 0 1 0-12h24a14 14 0 0 1 14 14ZM92.24 68.24 122 38.49V136a6 6 0 0 0 12 0V38.49l29.76 29.75a6 6 0 1 0 8.48-8.48l-40-40a6 6 0 0 0-8.48 0l-40 40a6 6 0 1 0 8.48 8.48Z" />
                </svg>
            </button>

            <img
                src="https://images.unsplash.com/photo-1665686308827-eb62e4f6604d?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
"
                class="absolute z-10 h-full w-full object-cover"
                alt="" />

            <div class="absoute top-0 left-0 z-20 h-full w-full bg-gradient-to-tl from-black/80"></div>
        </div>

        <main class="z-20 grow">
            <!-- Profil infos -->
            <section class="user flex flex-col">
                <div class="profil-img mb-4">
                    <img class="img-full" src="https://randomuser.me/api/portraits/women/12.jpg" />
                </div>
                <span class="user-job">Marketing Manager</span>
                <h2 class="user-name">Benutzer Name</h2>
                <span class="user-slogan">Marketing, das Dich weiterbringt</span>
            </section>

            <h3>Über mich</h3>
            <div class="about">
                <div class="about-me">
                    <p>Ich bin Marketingberaterin, Referentin und Mentorin für Selbstständige, die ihr Business strategisch und gleichzeitig authentisch aufbauen möchten.</p>
                    <p>Mein Ziel ist es, dir zu helfen, Klarheit in deine Positionierung zu bringen und eine Marketingstrategie zu entwickeln, die nicht nur Likes bringt, sondern echte Kund:innen.</p>
                    <p>Mit einem praxisnahen Blick, einer ordentlichen Portion Klartext und einer Prise Humor begleite ich dich in Workshops, 1:1-Mentorings und in meinem Podcast „Cup of Business“.</p>
                </div>
                <button>... mehr</button>
            </div>

            <h3>Meine Links</h3>

            <nav class="flex flex-col space-y-4">
                <a class="first-button" href="#">
                    <div class="absolute -left-1 m-1 flex-center flex h-12 w-12 rounded-l-full bg-gradient-to-r from-brand-dark">
                        <svg class="h-7 fill-neutral-50" viewBox="0 0 256 256">
                            <path d="M208 34h-26V24a6 6 0 0 0-12 0v10H86V24a6 6 0 0 0-12 0v10H48a14 14 0 0 0-14 14v160a14 14 0 0 0 14 14h160a14 14 0 0 0 14-14V48a14 14 0 0 0-14-14ZM48 46h26v10a6 6 0 0 0 12 0V46h84v10a6 6 0 0 0 12 0V46h26a2 2 0 0 1 2 2v34H46V48a2 2 0 0 1 2-2Zm160 164H48a2 2 0 0 1-2-2V94h164v114a2 2 0 0 1-2 2Zm-70-78a10 10 0 1 1-10-10 10 10 0 0 1 10 10Zm44 0a10 10 0 1 1-10-10 10 10 0 0 1 10 10Zm-88 40a10 10 0 1 1-10-10 10 10 0 0 1 10 10Zm44 0a10 10 0 1 1-10-10 10 10 0 0 1 10 10Zm44 0a10 10 0 1 1-10-10 10 10 0 0 1 10 10Z" />
                        </svg>
                    </div>
                    <span>1:1 Coaching von und mit der sagenhaften Shong Lee</span>
                </a>
                <a class="button" href="#">
                    <div class="absolute -left-1 m-1 flex-center flex h-12 w-12 rounded-l-full bg-gradient-to-r from-neutral-200">
                        <svg class="h-7 fill-neutral-500" viewBox="0 0 256 256">
                            <path d="m212.24 83.76-56-56A6 6 0 0 0 152 26H56a14 14 0 0 0-14 14v176a14 14 0 0 0 14 14h144a14 14 0 0 0 14-14V88a6 6 0 0 0-1.76-4.24ZM158 46.48 193.52 82H158ZM200 218H56a2 2 0 0 1-2-2V40a2 2 0 0 1 2-2h90v50a6 6 0 0 0 6 6h50v122a2 2 0 0 1-2 2Zm-34-82a6 6 0 0 1-6 6H96a6 6 0 0 1 0-12h64a6 6 0 0 1 6 6Zm0 32a6 6 0 0 1-6 6H96a6 6 0 0 1 0-12h64a6 6 0 0 1 6 6Z" />
                        </svg>
                    </div>
                    <span>Blog: Cup of Business</span>
                </a>
                <a class="button" href="#">
                    <div class="absolute -left-1 m-1 flex-center flex h-12 w-12 rounded-l-full bg-gradient-to-r from-neutral-200">
                        <svg class="h-7 fill-neutral-500" viewBox="0 0 256 256">
                            <path d="M200.47 56.07A101.37 101.37 0 0 0 128.77 26H128A102 102 0 0 0 26 128v56a22 22 0 0 0 22 22h16a22 22 0 0 0 22-22v-40a22 22 0 0 0-22-22H38.2A90.12 90.12 0 0 1 192 64.52 89.41 89.41 0 0 1 217.81 122H192a22 22 0 0 0-22 22v40a22 22 0 0 0 22 22h16a22 22 0 0 0 22-22v-56a101.44 101.44 0 0 0-29.53-71.93ZM64 134a10 10 0 0 1 10 10v40a10 10 0 0 1-10 10H48a10 10 0 0 1-10-10v-50Zm154 50a10 10 0 0 1-10 10h-16a10 10 0 0 1-10-10v-40a10 10 0 0 1 10-10h26Z" />
                        </svg>
                    </div>
                    <span> Podcast auf Spotify</span>
                </a>
                <a class="button" href="#">
                    <div class="absolute -left-1 m-1 flex-center flex h-12 w-12 rounded-l-full bg-gradient-to-r from-neutral-200">
                        <svg class="h-7 fill-neutral-500" viewBox="0 0 256 256">
                            <path d="M32 64a8 8 0 0 1 8-8h176a8 8 0 0 1 0 16H40a8 8 0 0 1-8-8Zm8 48h128a8 8 0 0 0 0-16H40a8 8 0 0 0 0 16Zm176 24H40a8 8 0 0 0 0 16h176a8 8 0 0 0 0-16Zm-48 40H40a8 8 0 0 0 0 16h128a8 8 0 0 0 0-16Z" />
                        </svg>
                    </div>
                    <div class="absolute -top-1 -right-2 inline-block scale-95 rounded-full bg-brand px-2 py-0.5 text-xs text-neutral-50">Kostenlos</div>
                    <span class="relative"> Marketing-Guide</span>
                </a>

                <div class="more-links mx-auto rounded-full bg-neutral-100 p-1 px-3.5 text-sm text-brand shadow">...mehr</div>
            </nav>

            <h3>Social Media</h3>
            <section class="social-links">
                <div class="social-link">
                    <svg fill="currentColor" viewBox="0 0 256 256">
                        <path d="M128 26a102 102 0 1 0 102 102A102.12 102.12 0 0 0 128 26Zm81.57 64h-40.38a132.58 132.58 0 0 0-25.73-50.67A90.29 90.29 0 0 1 209.57 90Zm8.43 38a89.7 89.7 0 0 1-3.83 26h-42.36a155.43 155.43 0 0 0 0-52h42.36a89.7 89.7 0 0 1 3.83 26Zm-90 87.83a110 110 0 0 1-15.19-19.45A124.24 124.24 0 0 1 99.35 166h57.3a124.24 124.24 0 0 1-13.46 30.38A110 110 0 0 1 128 215.83ZM96.45 154a139.18 139.18 0 0 1 0-52h63.1a139.18 139.18 0 0 1 0 52ZM38 128a89.7 89.7 0 0 1 3.83-26h42.36a155.43 155.43 0 0 0 0 52H41.83A89.7 89.7 0 0 1 38 128Zm90-87.83a110 110 0 0 1 15.19 19.45A124.24 124.24 0 0 1 156.65 90h-57.3a124.24 124.24 0 0 1 13.46-30.38A110 110 0 0 1 128 40.17Zm-15.46-.84A132.58 132.58 0 0 0 86.81 90H46.43a90.29 90.29 0 0 1 66.11-50.67ZM46.43 166h40.38a132.58 132.58 0 0 0 25.73 50.67A90.29 90.29 0 0 1 46.43 166Zm97 50.67A132.58 132.58 0 0 0 169.19 166h40.38a90.29 90.29 0 0 1-66.11 50.67Z" />
                    </svg>
                </div>
                <div class="social-link">
                    <svg class="h-6" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224 72a48.05 48.05 0 0 1-48-48 8 8 0 0 0-8-8h-40a8 8 0 0 0-8 8v132a20 20 0 1 1-28.57-18.08 8 8 0 0 0 4.57-7.23V88a8 8 0 0 0-9.4-7.88C50.91 86.48 24 119.1 24 156a76 76 0 0 0 152 0v-39.71A103.25 103.25 0 0 0 224 128a8 8 0 0 0 8-8V80a8 8 0 0 0-8-8Zm-8 39.64a87.19 87.19 0 0 1-43.33-16.15A8 8 0 0 0 160 102v54a60 60 0 0 1-120 0c0-25.9 16.64-49.13 40-57.6v27.67A36 36 0 1 0 136 156V32h24.5A64.14 64.14 0 0 0 216 87.5Z" />
                    </svg>
                </div>
                <div class="social-link">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 256 256">
                        <path d="m214.75 211.71-62.6-98.38 61.77-67.95a8 8 0 0 0-11.84-10.76l-58.84 64.72-40.49-63.63A8 8 0 0 0 96 32H48a8 8 0 0 0-6.75 12.3l62.6 98.37-61.77 68a8 8 0 1 0 11.84 10.76l58.84-64.72 40.49 63.63A8 8 0 0 0 160 224h48a8 8 0 0 0 6.75-12.29ZM164.39 208 62.57 48h29l101.86 160Z" />
                    </svg>
                </div>
                <div class="social-link">
                    <svg fill="currentColor" viewBox="0 0 256 256">
                        <path d="M128 80a48 48 0 1 0 48 48 48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32 32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12 12 12 0 0 1 12 12Z" />
                    </svg>
                </div>
            </section>
        </main>
        <div class="copy">&copy; 2025 by Benutzername</div>
    </div>
    <nav>
        <a href="#">Impressum</a>
        <a href="#">Datenschutz</a>
    </nav>

</body>

</html>