@extends('layouts.website.app') @section('content')

<div
    class="flex justify-center items-center gap-6 w-full max-w-screen-xl m-auto flex-col p-4 mt-4"
>
    <div class="flex w-full flex-col gap-4">
        <input
            type="text"
            placeholder="Rozpocznij wpisywanie..."
            class="w-full rounded-lg p-4 border-2 border-gray-100"
        />
        <div
            class="flex rounded-lg border-2 border-gray-100 w-fit gap-2 p-2 m-auto"
        >
            <button
                class="bg-blue-500 p-2 text-white w-24 rounded-lg transition-all duration-200"
            >
                Windows
            </button>
            <button
                class="w-24 hover:bg-gray-100 rounded-lg transition-all duration-200"
            >
                MacOS
            </button>
            <button
                class="w-24 hover:bg-gray-100 rounded-lg transition-all duration-200"
            >
                Linux
            </button>
        </div>
    </div>

    <div class="flex justify-center items-center flex-col flex-wrap w-full">
        <div class="flex gap-2 items-center justify-start w-full mb-4">
            <div class="w-2 h-2 bg-red-600"></div>
            <h2 class="font-bold text-xl text-left w-full">Przeglądarki</h2>
        </div>
        <div class="flex w-full flex-wrap gap-4">
            <a
                href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B5E0D1AA9-E11C-3D32-13D5-714D093BCA4A%7D%26lang%3Dpl%26browser%3D4%26usagestats%3D1%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-statsdef_1%26installdataindex%3Dempty/update2/installers/ChromeSetup.exe"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/chrome-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Google Chrome</h1>
                <p class="no-underline">
                    Google Chrome, wymowa: – darmowa przeglądarka internetowa
                    rozwijana przez Google.
                </p>
            </a>
            <a
                href="https://download.mozilla.org/?product=firefox-stub&os=win&lang=pl"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/firefox-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Mozilla Firefox</h1>
                <p class="no-underline">
                    Google Chrome, wymowa: – darmowa przeglądarka internetowa
                    rozwijana przez Google.
                </p>
            </a>
            <a
                href="https://net.geo.opera.com/opera/stable/windows?utm_tryagain=yes&utm_source=google&utm_medium=ose&utm_campaign=(none)&http_referrer=https%3A%2F%2Fwww.google.com%2F&utm_site=opera_com&&utm_lastpage=opera.com/download"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/opera-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Opera</h1>
                <p class="no-underline">
                    Google Chrome, wymowa: – darmowa przeglądarka internetowa
                    rozwijana przez Google.
                </p>
            </a>
            <a
                href="https://net.geo.opera.com/opera_gx/stable/windows?utm_tryagain=yes&utm_source=google&utm_medium=ose&utm_campaign=(none)&http_referrer=https%3A%2F%2Fwww.google.com%2F&utm_site=opera_com&&utm_lastpage=opera.com/gx"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/operagx-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Opera GX</h1>
                <p class="no-underline">
                    Google Chrome, wymowa: – darmowa przeglądarka internetowa
                    rozwijana przez Google.
                </p>
            </a>

            <a
                href="https://laptop-updates.brave.com/download/BRV010?bitness=64"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/brave-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Brave Browser</h1>
                <p class="no-underline">
                    Google Chrome, wymowa: – darmowa przeglądarka internetowa
                    rozwijana przez Google.
                </p>
            </a>
        </div>
    </div>
    <div class="flex justify-center items-center flex-col flex-wrap w-full">
        <div class="flex gap-2 items-center justify-start w-full mb-4">
            <div class="w-2 h-2 bg-blue-500"></div>
            <h2 class="font-bold text-xl text-left w-full">
                Antywirusy i zabezpieczenia
            </h2>
        </div>
        <div class="flex w-full flex-wrap gap-4">
            <a
                download
                href="https://bits.avcdn.net/productfamily_ANTIVIRUS/insttype_FREE/platform_WIN/installertype_ONLINE/build_RELEASE/cookie_mmm_ava_998_999_000_m:dlid_FAV-ONLINE-HP?alt=pl-pl"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/avast-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Avast</h1>
                <p class="no-underline">
                    Avast Antivirus – program antywirusowy, którego producentem
                    jest czeska firma Avast Software.
                </p>
            </a>
            <a
                href="https://downloads.malwarebytes.com/file/adwcleaner"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/adwcleaner-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">AdwCleaner</h1>
                <p class="no-underline">
                    AdwCleaner – oprogramowanie narzędziowe służące do usuwania
                    potencjalnie niechcianego oprogramowania.
                </p>
            </a>
            <a
                href="https://package.avira.com/download/spotlight-windows-bootstrapper/avira_en_sptl1_4b1b596b76ee9b34__pavwws-spotlight-release.exe"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/avira-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Avira antivirus</h1>
                <p class="no-underline">
                    Avira Antywirus to oprogramowanie do ochrony komputerów i
                    urządzeń mobilnych przed zagrożeniami cyfrowymi.
                </p>
            </a>
        </div>
    </div>
    <div class="flex justify-center items-center flex-col flex-wrap w-full">
        <div class="flex gap-2 items-center justify-start w-full mb-4">
            <div class="w-2 h-2 bg-green-500"></div>
            <h2 class="font-bold text-xl text-left w-full">
                Diagnostyka i informacje
            </h2>
        </div>
        <div class="flex w-full flex-wrap gap-4">
            <a
                download
                href="https://download.cpuid.com/hwmonitor/hwmonitor_1.53.exe"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/hwmonitor-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">
                    HWMonitor (1.53)
                </h1>
                <p class="no-underline">
                    Avast Antivirus – program antywirusowy, którego producentem
                    jest czeska firma Avast Software.
                </p>
            </a>
            <a
                href="https://downloads.sourceforge.net/project/crystaldiskinfo/9.3.2/CrystalDiskInfo9_3_2.exe?ts=gAAAAABmjCp-nx5om18-oQsg4Q9zVtEX_eMZWRroVpmoA0bos0pd2uQaCQE6iRTtQZpJmi5eFaJ5dw8p2vIE7L8Z8jcJjrU4bw%3D%3D&r=https%3A%2F%2Fsourceforge.net%2Fprojects%2Fcrystaldiskinfo%2Ffiles%2F9.3.2%2FCrystalDiskInfo9_3_2.exe%2Fdownload%3Fuse_mirror%3Dnetcologne%26r%3Dhttps%253A%252F%252Fsourceforge.net%252Fprojects%252Fcrystaldiskinfo%252Ffiles%252Flatest%252Fdownload"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/adwcleaner-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">
                    Crystal Disk Info
                </h1>
                <p class="no-underline">
                    AdwCleaner – oprogramowanie narzędziowe służące do usuwania
                    potencjalnie niechcianego oprogramowania.
                </p>
            </a>
            <a
                href="https://package.avira.com/download/spotlight-windows-bootstrapper/avira_en_sptl1_4b1b596b76ee9b34__pavwws-spotlight-release.exe"
                class="w-full max-w-96 p-4 rounded-lg border-2 border-gray-100 flex flex-col gap-1 hover:bg-slate-50 transition-all duration-200"
            >
                <img
                    src="{{ asset('img/avira-logo.png') }}"
                    alt=""
                    class="w-12"
                />
                <h1 class="text-2xl font-bold no-underline">Avira antivirus</h1>
                <p class="no-underline">
                    Avira Antywirus to oprogramowanie do ochrony komputerów i
                    urządzeń mobilnych przed zagrożeniami cyfrowymi.
                </p>
            </a>
        </div>
    </div>
</div>

@endsection
