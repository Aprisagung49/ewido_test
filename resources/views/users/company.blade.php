<x-users.layout>
    {{-- DOCUMENT FRAGMENTS --}}
    <section class="container mx-auto px-44 pt-24 fixed top-0 left-0 fixed-nav">
        <nav class="flex justify-between items-center">
            <a href="#about" class="nav-link flex-1 text-center py-2 text-gray-700 font-semibold hover:text-gold">About
                Us</a>
            <a href="#story" class="nav-link flex-1 text-center py-2 text-gray-700 font-semibold hover:text-gold">Our
                Story</a>
            <a href="#quality"
                class="nav-link flex-1 text-center py-2 text-gray-700 font-semibold hover:text-gold">Quality Control</a>
            <a href="#manpower"
                class="nav-link flex-1 text-center py-2 text-gray-700 font-semibold hover:text-gold">Manpower &
                Training</a>
            <a href="#certificates"
                class="nav-link flex-1 text-center py-2 text-gray-700 font-semibold hover:text-gold">Certificates</a>
            <a href="#quality-acc"
                class="nav-link flex-1 text-center py-2 text-gray-700 font-semibold hover:text-gold">Quality
                Accreditations</a>
        </nav>
    </section>

    {{-- ABOUT US SECTION --}}
    <x-users.panel color="gray" id="about">
        <x-users.section>
            <x-users.heading>About Us</x-users.heading>
            <div class="text-base text-gray-700 leading-7 text-justify">
                <p class="mt-8">
                    PT Ewindo was established on May 10, 1974, as a joint venture
                    dedicated to manufacturing high-quality electrical products. With
                    a capital investment of USD 10 million, we specialize in producing
                    magnet wire, electric cables, wiring harnesses, power supply
                    cords, and cord sets.
                </p>
                <p class="mt-4">
                    Our workforce consists of 2.800 dedicated employees, spread across
                    two advanced facilities:
                </p>
                <ul role="list" class="mt-4 space-y-4 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mt-1 size-5 flex-none text-yellow-500">
                            <path fill-rule="evenodd"
                                d="M4.5 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5h-.75V3.75a.75.75 0 0 0 0-1.5h-15ZM9 6a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm-.75 3.75A.75.75 0 0 1 9 9h1.5a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM9 12a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm3.75-5.25A.75.75 0 0 1 13.5 6H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM13.5 9a.75.75 0 0 0 0 1.5H15A.75.75 0 0 0 15 9h-1.5Zm-.75 3.75a.75.75 0 0 1 .75-.75H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM9 19.5v-2.25a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-4.5A.75.75 0 0 1 9 19.5Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span><strong class="font-semibold text-gray-900">Plant 1 :</strong>
                            Located at Jalan Cimuncang No. 68 in Bandung, it specializes in producing magnet wire, a
                            variety of cables (including electronic, automotive, and UL/c-UL), and power supply cords on
                            a 2.4-hectare site.
                        </span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mt-1 size-5 flex-none text-yellow-500">
                            <path fill-rule="evenodd"
                                d="M4.5 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5h-.75V3.75a.75.75 0 0 0 0-1.5h-15ZM9 6a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm-.75 3.75A.75.75 0 0 1 9 9h1.5a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM9 12a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm3.75-5.25A.75.75 0 0 1 13.5 6H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM13.5 9a.75.75 0 0 0 0 1.5H15A.75.75 0 0 0 15 9h-1.5Zm-.75 3.75a.75.75 0 0 1 .75-.75H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM9 19.5v-2.25a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-4.5A.75.75 0 0 1 9 19.5Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span><strong class="font-semibold text-gray-900">Plant 2 :</strong>
                            Situated on a 2.5-hectare plot at Jalan Rancaekek KM 24.5 within the Dwipapuri Industrial
                            Estate, it focuses on wiring harnesses for both electronic and automotive applications.
                        </span>
                    </li>
                </ul>
                <p class="mt-4">
                    We are proud to have strong backing from both Japanese and Indonesian shareholders, including
                    Nikkatsu Densen Seizo K.K., Mr. Minoru Otanaka, Merbabu Corporation, and Sakata Manufacturing Co.
                    Ltd., as well as local partners Ms. Corry K. Djuwanta and Mr. Satrio Nugroho. Our leadership team,
                    headed by President Director Ms. Corry K. Djuwanta and supported by directors Mr. Toshio Sakuma and
                    Mr. Keiji Matsumura, is committed to maintaining the highest standards of quality and innovation.
                </p>
            </div>
            <div class="relative isolate px-6 pt-10 lg:px-8">
                <div class="bg-dark sm:py-6">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-4">
                            <div
                                class="mx-auto flex w-48 items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                                <dt class="text-base/7 text-gray-600">Founded</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    1974
                                </dd>
                            </div>
                            <div
                                class="mx-auto flex w-48 items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                                <dt class="text-base/7 text-gray-600">Employees</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    2800+
                                </dd>
                            </div>
                            <div
                                class="mx-auto flex w-48 items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                                <dt class="text-base/7 text-gray-600">Plants</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    2
                                </dd>
                            </div>
                            <div
                                class="mx-auto flex w-48 items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                                <dt class="text-base/7 text-gray-600">Products</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    200+
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </x-users.section>
    </x-users.panel>

    {{-- OUR STORY --}}
    <x-users.panel id="story">
        <x-users.section>
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div
                        class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-yellow-500">
                        <h3 class="text-3xl font-semibold text-gold">Our Story</h3>
                    </div>
                </div>
                <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                    <div
                        class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-gray-300">
                        <div
                            class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-yellow-500">
                            <h3 class="text-xl font-semibold tracking-wide">
                                Foundation and Initial Growth
                            </h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">1974 - 1978</time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    1974: Founded in Bandung as a joint-venture company with a capital of USD 0.9
                                    million.
                                </li>
                                <li>
                                    1975: Began manufacturing Enamel Wire (EW) & Polyvinyl Formal Enamelled Wire (PVF).
                                </li>
                                <li>
                                    1976: Started manufacturing Polyester Enamelled Wire (PEW).
                                </li>
                                <li>
                                    1977: Started manufacturing Polyurethane Enamelled Wire (UEW).
                                </li>
                                <li>
                                    1983: Obtained approval from JIS for PEW
                                </li>
                            </ul>
                            <div class="grid grid-cols-2 md:grid-cols-3">
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1974.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1975.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1977.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-yellow-500">
                            <h3 class="text-xl font-semibold tracking-wide">
                                Expansion into Electric Cables and Certifications
                            </h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">1986 - 1990</time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7">
                                <li>
                                    1986: Started manufacturing Electric Cables and increased capital to USD 1.35
                                    million.
                                </li>
                                <li>
                                    1990: Obtained approval from Dentori Japan for Cables.
                                </li>
                                <li>
                                    1999: Obtained approval from CB Certificate and European Certificate for cables.
                                </li>
                                <li>
                                    1991: Started manufacturing Electric Cables, obtained approval from UL and CSA for
                                    Electric Cables & Power Supply Cord.
                                </li>
                                <li>
                                    1994: Increased capital to USD 4.75 million and started manufacturing Wiring
                                    Harness; obtained UL/CSA approval.
                                </li>
                                <li>
                                    1995: Obtained Quality System Management ISO 9002.
                                </li>
                            </ul>
                            <div class="grid grid-cols-2 md:grid-cols-3">
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1986.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1991.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-yellow-500">
                            <h3 class="text-xl font-semibold tracking-wide">
                                International Certification and Expansion
                            </h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">1997 - 2001</time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    1997: Obtained approval from F Mark for cables.
                                </li>
                                <li>
                                    1998: Obtained approval from C-UL for cables.
                                </li>
                                <li>
                                    1999: Obtained approval from CB Certificate and European Certificate for cables.
                                </li>
                                <li>
                                    2000: Obtained approval from Australian Standard Mark for cable and Management
                                    System of Occupational Safety and Health Certificate.
                                </li>
                            </ul>
                            <div class="grid grid-cols-2 md:grid-cols-3">
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1994.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1995.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-1999.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-yellow-500">
                            <h3 class="text-xl font-semibold tracking-wide">
                                Facility Expansion and Environmental Standards
                            </h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">2002 - 2007</time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    2003: Moved Plant 2, Wiring Harness Dept. to Rancaekek Sumedang.
                                </li>
                                <li>
                                    2005: Obtained approval from UL for Enamel Wire.
                                </li>
                                <li>
                                    1999: Obtained approval from CB Certificate and European Certificate for cables.
                                </li>
                                <li>
                                    2006: Increased capital to USD 6.25 million and successfully received EMS ISO
                                    14001:2004 certification.
                                </li>
                            </ul>
                            <div class="grid grid-cols-2 md:grid-cols-3">
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-2000.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-2003.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-2006.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-yellow-500">
                            <h3 class="text-xl font-semibold tracking-wide">
                                Continued Growth and ISO Updates
                            </h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">2009 - 2014</time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    2009: Successfully updated ISO 9001:2008.
                                </li>
                                <li>
                                    2011: Increased capital to USD 9 million.
                                </li>
                                <li>
                                    2013: Increased capital to USD 10 million.
                                </li>
                            </ul>
                            <div class="grid grid-cols-2 md:grid-cols-3">
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-2009.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-2013.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-2017.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-yellow-500">
                            <h3 class="text-xl font-semibold tracking-wide">
                                Modernization and New Standards
                            </h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">2017 - 2020</time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    2017: Successfully updated ISO 9001:2015 and ISO 14001:2015.
                                </li>
                                <li>
                                    2020: Successfully updated ISO IATF 16949:2016.
                                </li>
                            </ul>
                            <div class="grid grid-cols-2 md:grid-cols-3">
                                <div>
                                    <img class="h-auto max-w-40" src="storage/images/company-history/ewindo-2020.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-users.section>
    </x-users.panel>

    {{-- QUALITY CONTROL & TQA --}}
    <x-users.panel color="gray" id="quality">
        <x-users.section>
            <x-users.heading>Quality Control & TQA</x-users.heading>
            <div class="text-base text-gray-700 leading-7 text-justify">
                <p class="mt-8">
                    We are committed to the 5S Concept as a cornerstone of our
                    management philosophy, emphasizing workplace cleanliness and
                    safety:
                </p>
                <div class="relative isolate px-6 lg:px-8">
                    <div class="bg-dark py-4 sm:py-6">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-5">
                                <div class="grid grid-cols-1 justify-items-center bg-white rounded-lg p-6">
                                    <dt class="text-base/7 text-gray-600">SEIRI</dt>
                                    <dt class="text-base/7 text-gray-600">SORT</dt>
                                    <dd
                                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                        <img src="{{ asset('storage/images/Icon/5s/1.png') }}" alt="Seiton"
                                            width="100" />
                                    </dd>
                                </div>
                                <div class="grid grid-cols-1 justify-items-center bg-white rounded-lg p-6">
                                    <dt class="text-base/7 text-gray-600">SEITON</dt>
                                    <dt class="text-base/7 text-gray-600">
                                        SET IN ORDER
                                    </dt>
                                    <dd
                                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                        <img src="{{ asset('storage/images/Icon/5s/2.png') }}" alt="Seiton"
                                            width="100" />
                                    </dd>
                                </div>
                                <div class="grid grid-cols-1 justify-items-center bg-white rounded-lg p-6">
                                    <dt class="text-base/7 text-gray-600">SEISO</dt>
                                    <dt class="text-base/7 text-gray-600">SHINE</dt>
                                    <dd
                                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                        <img src="{{ asset('storage/images/Icon/5s/3.png') }}" alt="Seiton"
                                            width="100" />
                                    </dd>
                                </div>
                                <div class="grid grid-cols-1 justify-items-center bg-white rounded-lg p-6">
                                    <dt class="text-base/7 text-gray-600">SEIKETSU</dt>
                                    <dt class="text-base/7 text-gray-600">
                                        STANDARDIZE
                                    </dt>
                                    <dd
                                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                        <img src="{{ asset('storage/images/Icon/5s/4.png') }}" alt="Seiton"
                                            width="100" />
                                    </dd>
                                </div>
                                <div class="grid grid-cols-1 justify-items-center bg-white rounded-lg p-6">
                                    <dt class="text-base/7 text-gray-600">SHITSUKE</dt>
                                    <dt class="text-base/7 text-gray-600">SUSTAIN</dt>
                                    <dd
                                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                        <img src="{{ asset('storage/images/Icon/5s/2.png') }}" alt="Seiton"
                                            width="100" />
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <p class="mt-8">
                    As part of our Total Quality Management (TQM) approach, we strive
                    to consistently deliver the highest quality products that meet
                    industry standards. We involve all employees—from the
                    manufacturing and service lines to administration—in this
                    commitment through:
                </p>
                <ul class="mt-4 list-disc pl-4 space-y-3 text-gray-700">
                    <li>Tightening production process controls.</li>
                    <li>
                        Enhancing understanding and awareness of quality systems,
                        environmental concerns, and occupational health and safety
                        through training and information dissemination .
                    </li>
                    <li>
                        Continuously developing our Quality Management System,
                        Environment, and Occupational Health and Safety practices.
                    </li>
                    <li>
                        Regular evaluation and monitoring of our systems and processes.
                    </li>
                    <li>
                        Ensuring compliance with laws, regulations, and other relevant
                        requirements related to quality, environment, and safety.
                    </li>
                    <li>
                        Preventing environmental pollution and minimizing the impact of
                        our materials, processes, and products.
                    </li>
                    <li>
                        Promoting efficient resource use and incorporating
                        environmentally friendly, recyclable materials.
                    </li>
                    <li>
                        Managing environmental and hazardous elements in accordance with
                        applicable standards.
                    </li>
                </ul>
                <p class="mt-4">
                    Through these initiatives, we aim to foster a culture of quality
                    and responsibility across our organization.
                </p>
            </div>
        </x-users.section>
    </x-users.panel>

    {{-- MANPOWER SECTION --}}
    <x-users.panel id="manpower">
        <x-users.section>
            <x-users.heading>Manpower & Training</x-users.heading>
            <div class="text-base text-gray-700 leading-7 text-justify">
                <p class="mt-8 text-center">
                    At PT EWINDO, we view our employees as one of our most valuable
                    assets. By implementing a thorough selection process, appropriate
                    placement, and comprehensive training, we aim to optimize each
                    employee's potential. Our commitment is guided by the 5H
                    principle:
                </p>
                <div class="relative isolate px-6 lg:px-8">
                    <div class="bg-white py-4 sm:py-6">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-5">
                                <div class="card w-40">
                                    <div
                                        class="card__content text-center relative p-20 transition-transform duration-1000 text-black font-bold">
                                        <div
                                            class="card__front absolute top-0 bottom-0 right-0 left-0 p-8 bg-gray-200 flex items-center justify-center">
                                            <img src="{{ asset('storage/images/icon/Manpower/6.png') }}"
                                                alt="Health" width="100" />
                                        </div>
                                        <div
                                            class="card__back absolute top-0 bottom-0 right-0 left-0 bg-gray-200 flex items-center justify-center">
                                            <p class="text-sm/6 p-2 font-semibold">
                                                Every employees should maintain both spiritual and
                                                physical well-being.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-40">
                                    <div
                                        class="card__content text-center relative p-20 transition-transform duration-1000 text-black font-bold">
                                        <div
                                            class="card__front absolute top-0 bottom-0 right-0 left-0 p-8 bg-gray-200 flex items-center justify-center">
                                            <img src="{{ asset('storage/images/icon/Manpower/7.png') }}"
                                                alt="Heart" width="100" />
                                        </div>
                                        <div
                                            class="card__back absolute top-0 bottom-0 right-0 left-0 bg-gray-200 flex items-center justify-center">
                                            <p class="text-sm/6 p-2 font-semibold">
                                                Employees must demonstrate sincere commitment and
                                                dedication to their work.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-40">
                                    <div
                                        class="card__content text-center relative p-20 transition-transform duration-1000 text-black font-bold">
                                        <div
                                            class="card__front absolute top-0 bottom-0 right-0 left-0 p-8 bg-gray-200 flex items-center justify-center">
                                            <img src="{{ asset('storage/images/icon/Manpower/9.png') }}"
                                                alt="Health" width="100" />
                                        </div>
                                        <div
                                            class="card__back absolute top-0 bottom-0 right-0 left-0 bg-gray-200 flex items-center justify-center">
                                            <p class="text-sm/6 p-2 font-semibold">
                                                Knowledge and intelligence are essential for every
                                                employees.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-40">
                                    <div
                                        class="card__content text-center relative p-20 transition-transform duration-1000 text-black font-bold">
                                        <div
                                            class="card__front absolute top-0 bottom-0 right-0 left-0 p-8 bg-gray-200 flex items-center justify-center">
                                            <img src="{{ asset('storage/images/icon/Manpower/8.png') }}"
                                                alt="Heart" width="100" />
                                        </div>
                                        <div
                                            class="card__back absolute top-0 bottom-0 right-0 left-0 bg-gray-200 flex items-center justify-center">
                                            <p class="text-sm/6 p-2 font-semibold">
                                                Professionalism should be exhibited in all tasks
                                                undertaken.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-40">
                                    <div
                                        class="card__content text-center relative p-20 transition-transform duration-1000 text-black font-bold">
                                        <div
                                            class="card__front absolute top-0 bottom-0 right-0 left-0 p-8 bg-gray-200 flex items-center justify-center">
                                            <img src="{{ asset('storage/images/icon/Manpower/10.png') }}"
                                                alt="Hope" width="100" />
                                        </div>
                                        <div
                                            class="card__back absolute top-0 bottom-0 right-0 left-0 bg-gray-200 flex items-center justify-center">
                                            <p class="text-sm/6 p-2 font-semibold">
                                                Every employee should believe in a positive and
                                                promising future.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <p class="text-center">
                    We continuously focus on enhancing our employees' competencies to
                    keep them aligned with the latest developments in product types
                    and quality. Regular individual and group training programs are
                    conducted, often in collaboration with government and private
                    agencies in Indonesia, and include opportunities for employees to
                    train abroad, particularly in Japan.
                </p>
            </div>
        </x-users.section>
    </x-users.panel>

    {{-- HONOR CERTIFICATES --}}
    <x-users.panel color="gray" id="certificates">
        <x-users.section>
            <x-users.heading>Honor Certificates</x-users.heading>
            <div class="swiper swiper-certificate mt-10 px-10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="certificate-placeholder bg-gray-200">
                            <a href="#"
                                onclick="openModal(event, asset('storage/images/sertifikat/Sertifikat-ISO-14001-2015/Sertifikat ISO 14001 2015_page-0001.jpg'))">
                                <img src="{{ asset('storage/images/sertifikat/Sertifikat-ISO-14001-2015/Sertifikat ISO 14001 2015_page-0001.jpg') }}"
                                    alt="Certificates" class="cursor-pointer hover:opacity-80 transition">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-placeholder bg-gray-200">
                            <img src="{{ asset('storage/images/sertifikat/Sertifikat-ISO-9001-2015/Sertifikat ISO 9001 2015_page-0001.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-placeholder bg-gray-200">
                            <img src="{{ asset('storage/images/sertifikat/Sertifikat-SNI-ISO-9001-2015/Sertifikat SNI ISO 9001 2015_page-0001.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-placeholder bg-gray-200">
                            <img src="{{ asset('storage/images/sertifikat/Nondetachable-Power-Supply-Cords---General-Use/Nondetachable Power Supply Cords - General Use_page-0001.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-placeholder bg-gray-200">
                            <img src="storage/images/sertifikat/Detachable-Power-Supply-Cords---General-Use/Detachable Power Supply Cords - General Use_page-0001.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="certificate-placeholder bg-gray-200">
                            <img src="storage/images/sertifikat/CORD-SETS-AND-POWER-SUPPLY-CORDS/CORD SETS AND POWER-SUPPLY CORDS_page-0001.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-certificate"></div>
                <div class="swiper-button-prev swiper-button-prev-certificate"></div>
                <div class="swiper-button-next swiper-button-next-certificate"></div>
            </div>
        </x-users.section>
    </x-users.panel>

    {{-- QUALITY ACCREDITATIONS --}}
    <x-users.panel id="quality-acc">
        <x-users.section>
            <x-users.heading>Quality Accreditations</x-users.heading>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-4 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('storage/images/quality-accreditations/17.png') }}" alt="Transistor"
                    width="158" height="48" />
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('storage/images/quality-accreditations/18.png') }}" alt="Reform" width="158"
                    height="48" />
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('storage/images/quality-accreditations/19.png') }}" alt="Tuple" width="158"
                    height="48" />
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="{{ asset('storage/images/quality-accreditations/20.png') }}" alt="SavvyCal" width="158"
                    height="48" />
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="{{ asset('storage/images/quality-accreditations/21.png') }}" alt="SavvyCal" width="158"
                    height="48" />
            </div>
        </x-users.section>
    </x-users.panel>

</x-users.layout>
