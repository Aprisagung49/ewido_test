<x-users.layout>
    {{-- DOCUMENT FRAGMENTS --}}
    <section
        class="container mx-auto px-10 top-0 left-1 pr-25 pt-24 lg:px-44 lg:pt-25 fixed lg:top-0 lg:left-0 fixed-nav">
        <nav class="flex-1 ml-4 overflow-x-auto whitespace-nowrap scrollbar-hide lg:overflow-x-visible">
            <div class="flex space-x-4 sm:justify-between">
                <a href="#about" class="nav-link py-2 px-3 text-gray-700 font-semibold hover:text-yellow-500">About
                    Us</a>
                <a href="#story" class="nav-link py-2 px-3 text-gray-700 font-semibold hover:text-yellow-500">Our
                    Story</a>
                <a href="#quality" class="nav-link py-2 px-3 text-gray-700 font-semibold hover:text-yellow-500">Quality
                    Control</a>
                <a href="#manpower" class="nav-link py-2 px-3 text-gray-700 font-semibold hover:text-yellow-500">Manpower
                    &
                    Training</a>
                <a href="#certificates"
                    class="nav-link py-2 px-3 text-gray-700 font-semibold hover:text-yellow-500">Certificates</a>
                <a href="#quality-acc"
                    class="nav-link py-2 px-3 text-gray-700 font-semibold hover:text-yellow-500">Quality
                    Accreditations</a>
            </div>
        </nav>
    </section>

    {{-- ABOUT US SECTION --}}
    <x-users.panel color="gray" id="about">
        <x-users.section-about>
            <x-users.heading>About Us</x-users.heading>
            <div class="text-xs lg:text-base text-gray-700 leading-7 text-justify">
                <p class="mt-2">
                    PT Ewindo was established on May 10, 1974, as a joint venture
                    dedicated to manufacturing high-quality electrical products. With
                    a capital investment of USD 10 million, we specialize in producing
                    magnet wire, electric cables, wiring harnesses, power supply
                    cords, and cord sets.
                </p>
                <p class="mt-4">
                    Our workforce consists of Over 2.800 dedicated employees, spread across
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
                            variety of cables & wires (including electronic, automotive, and UL/CUL), and power supply
                            cords on
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
                            Estate, it focuses on wiring harnesses and power supply cords for both electronic and
                            automotive applications.
                        </span>
                    </li>
                </ul>
                <p class="mt-4">
                    We are proud to have strong backing from both Japanese and Indonesian shareholders, including
                    Nikkatsu Densen Seizo K.K., Mr. Shuichi Otanaka, Merbabu Corporation, and Sakata Manufacturing Co.
                    Ltd., as well as local partners Ms. Corry K. Djuwanta and
                    Mr. Satrio Nugroho. Our leadership team, headed by President Director Ms. Corry K. Djuwanta and
                    supported by directors Mr. Toshio Sakuma, Mr. Shuichi Otanaka and Mr. Kevin Ariestia, is committed
                    to maintaining the highest standards of quality and innovation.
                </p>
            </div>
            <div class="flex justify-center">
                <dl
                    class="grid grid-cols-2 gap-x-8 gap-y-8 text-center place-items-center sm:grid-cols-2 lg:grid-cols-4">
                    <div class="mx-auto flex w-50 items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                        <dt class="text-base/7 text-gray-600">Founded</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">1974
                        </dd>
                    </div>
                    <div
                        class="mx-auto flex w-30 lg:w-50  items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                        <dt class="text-base/7 text-gray-600">Employees</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">2800+
                        </dd>
                    </div>
                    <div class="mx-auto flex w-50 items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                        <dt class="text-base/7 text-gray-600">Plants</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">2</dd>
                    </div>
                    <div
                        class="mx-auto flex w-30 lg:w-50 items-center justify-center flex-col gap-y-4 bg-white p-6 rounded-lg">
                        <dt class="text-base/7 text-gray-600">Products</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">200+
                        </dd>
                    </div>
                </dl>
            </div>

        </x-users.section-about>
    </x-users.panel>

    {{-- OUR STORY --}}
    <x-users.panel id="story">
        <x-users.section>
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div
                        class="text-center sm:text-left lg:mb-14 before:block before:w-24 before:h-3 lg:before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-yellow-500">
                        <h3 class="text-[3rem] lg:text-3xl mt-14 lg:mt-1 font-semibold text-gold">Our Story</h3>
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
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600"><b>1974 - 1978</b></time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    <b>1974</b>: Founded in Bandung as a joint-venture company with a capital of USD 0.9
                                    million.
                                </li>
                                <li>
                                    <b>1975</b>: Began manufacturing Enamel Wire (EW) & Polyvinyl Formal Enamelled Wire
                                    (PVF).
                                </li>
                                <li>
                                    <b>1976</b>: Started manufacturing Polyester Enamelled Wire (PEW).
                                </li>
                                <li>
                                    <b>1977</b>: Started manufacturing Polyurethane Enamelled Wire (UEW).
                                </li>
                                <li>
                                    <b>1983</b>: Obtained approval from JIS for PEW
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
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600"><b>1986 - 1990</b></time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7">
                                <li>
                                    <b>1986</b>: Started manufacturing Electric Cables and increased capital to USD 1.35
                                    million.
                                </li>
                                <li>
                                    <b>1990</b>: Obtained approval from Dentori Japan for Cables.
                                </li>
                                <li>
                                    <b>1991</b>: Started manufacturing Electric Cables, obtained approval from UL and
                                    CSA for
                                    Electric Cables & Power Supply Cord.
                                </li>
                                <li>
                                    <b>1994</b>: Increased capital to USD 4.75 million and started manufacturing Wiring
                                    Harness; obtained UL/CSA approval.
                                </li>
                                <li>
                                    <b>1995</b>: Obtained Quality System Management ISO 9002.
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
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">
                                <b>1997 - 2001</b>
                            </time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    <b>1997</b>: Obtained approval from F Mark for cables.
                                </li>
                                <li>
                                    <b>1998</b>: Obtained approval from C-UL for cables.
                                </li>
                                <li>
                                    <b>1999</b>: Obtained approval from CB Certificate and European Certificate for
                                    cables.
                                </li>
                                <li>
                                    <b>2000</b>: Obtained approval from Australian Standard Mark for cable and
                                    Management
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
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600"><b>2002 - 2007</b></time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    <b>2003</b>: Moved Plant 2, Wiring Harness Dept. to Rancaekek Sumedang.
                                </li>
                                <li>
                                    <b>2005</b>: Obtained approval from UL for Enamel Wire.
                                </li>
                                <li>
                                    <b>2006</b> : Increased capital to USD 6.25 million and successfully received EMS
                                    ISO
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
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600"><b>2009 - 2014</b></time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    <b>2009</b>: Successfully updated ISO 9001:2008.
                                </li>
                                <li>
                                    <b>2011</b>: Increased capital to USD 9 million.
                                </li>
                                <li>
                                    <b>2013</b>: Increased capital to USD 10 million.
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
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600"><b>2017 - 2020</b></time>
                            <ul class="mt-3 mb-4 text-base text-gray-700 leading-7 text-justify">
                                <li>
                                    <b>2017</b>: Successfully updated ISO 9001:2015 and ISO 14001:2015.
                                </li>
                                <li>
                                    <b>2020</b>: Successfully updated ISO IATF 16949:2016.
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
        <x-users.section-about>
            <x-users.heading class="text-[3rem]">Quality Control & TQA</x-users.heading>
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
        </x-users.section-about>
    </x-users.panel>

    {{-- MANPOWER SECTION --}}
    <x-users.panel id="manpower">
        <x-users.section-about>
            <x-users.heading class="text-[2.7rem]">Manpower & Training</x-users.heading>
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
                        <div class="mx-auto max-w-7xl px-6 lg:px-8 sm:grid-cols-3">
                            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-5 ">
                                <div class="card w-40 mx-auto">
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
                                <div class="card w-40 mx-auto">
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
                                <div class="card w-40 mx-auto">
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
                                <div class="card w-40 mx-auto">
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
                                <div class="card w-40 mx-auto">
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
        </x-users.section-about>
    </x-users.panel>

    {{-- HONOR CERTIFICATES --}}

    <x-users.panel color="gray" id="certificates">
        <x-users.section-about>
            <x-users.heading>Honor Certificates</x-users.heading>
            <div x-data="{ showModal: false, imageSrc: '' }">

                <!-- Swiper Slider -->
                <div class="swiper swiper-certificate lg:max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
                    <div class="swiper-wrapper">

                        {{-- Contoh Slide Gambar --}}
                        @php
                            $images = [
                                'storage/images/sertifikat/Sertifikat-ISO-14001-2015/Sertifikat ISO 14001 2015_page-0001.jpg',
                                'storage/images/sertifikat/Sertifikat-ISO-9001-2015/Sertifikat ISO 9001 2015_page-0001.jpg',
                                'storage/images/sertifikat/Sertifikat-SNI-ISO-9001-2015/Sertifikat SNI ISO 9001 2015_page-0001.jpg',
                                'storage/images/sertifikat/Nondetachable-Power-Supply-Cords---General-Use/Nondetachable Power Supply Cords - General Use_page-0001.jpg',
                                'storage/images/sertifikat/Detachable-Power-Supply-Cords---General-Use/Detachable Power Supply Cords - General Use_page-0001.jpg',
                                'storage/images/sertifikat/CORD-SETS-AND-POWER-SUPPLY-CORDS/CORD SETS AND POWER-SUPPLY CORDS_page-0001.jpg',
                            ];
                        @endphp

                        @foreach ($images as $image)
                            <div class="swiper-slide">
                                <div class="certificate-placeholder mx-auto bg-gray-200">
                                    <img src="{{ asset($image) }}" alt="Certificate"
                                        class="cursor-pointer hover:opacity-80 transition"
                                        @click="showModal = true; imageSrc = '{{ asset($image) }}'">
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination swiper-pagination-certificate"></div>
                    <div class="swiper-button-prev swiper-button-prev-certificate"></div>
                    <div class="swiper-button-next swiper-button-next-certificate"></div>
                </div>
                <!-- Modal Image Preview -->
                <div x-show="showModal" x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center  backdrop-blur-md bg-black/40"
                    style="display: none" @click.away="showModal = false" @keydown.escape.window="showModal = false">
                    <div class="relative max-w-5xl mx-auto px-4">
                        <img :src="imageSrc" alt="Preview" class="max-h-[90vh] mx-auto rounded shadow-lg">
                    </div>
                    <button @click="showModal = false"
                        class="absolute top-1 right-4 w-10 h-10 flex justify-center rounded-full bg-white text-black text-3xl cursor-pointer font-bold hover:bg-red-600 hover:text-white transition">
                        &times;
                    </button>
                </div>
            </div>
        </x-users.section-about>
    </x-users.panel>
    {{-- QUALITY ACCREDITATIONS --}}
    <x-users.panel id="quality-acc">
        <x-users.section>
            <x-users.heading class="text-[2.6rem]">Quality Accreditations</x-users.heading>
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
            {{-- SCRIPT JS SWIPPER CERTIFICATE --}}
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    new Swiper(".swiper-certificate", {
                        loop: true,
                        spaceBetween: 20,
                        pagination: {
                            el: ".swiper-pagination-certificate",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next-certificate",
                            prevEl: ".swiper-button-prev-certificate",
                        },
                        // Responsive breakpoints
                        breakpoints: {
                            0: {
                                slidesPerView: 1, // Mobile: 1 slide per view
                            },
                            768: {
                                slidesPerView: 2, // Tablet: 2 slides
                            },
                            1024: {
                                slidesPerView: 3, // Desktop: 3 slides (default)
                            },
                        },
                    });
                });
            </script>

            {{-- SCRIPT NAV AKTIF --}}
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const navLinks = document.querySelectorAll('.nav-link');
                    const sections = Array.from(navLinks).map(link => document.querySelector(link.getAttribute('href')));
                    const navContainer = document.querySelector('nav');

                    function getActiveSection() {
                        const scrollPosition = window.scrollY + 100; // +100 untuk menghindari ketutup header
                        let activeIndex = 0;
                        sections.forEach((section, index) => {
                            if (section && section.offsetTop <= scrollPosition) {
                                activeIndex = index;
                            }
                        });
                        return activeIndex;
                    }

                    function updateActiveLink() {
                        const activeIndex = getActiveSection();
                        navLinks.forEach((link, i) => {
                            link.classList.remove('text-gold');
                            if (i === activeIndex) {
                                link.classList.add('text-gold');

                                // Scroll nav agar link aktif kelihatan di tengah
                                link.scrollIntoView({
                                    behavior: 'smooth',
                                    inline: 'center',
                                    block: 'nearest'
                                });
                            }
                        });
                    }

                    // Scroll event
                    window.addEventListener('scroll', updateActiveLink);
                });
            </script>
        </x-users.section>
    </x-users.panel>
</x-users.layout>
