{{-- 
    SVG Layout for Auditorio Stoa 
    - Main sections: Escenario, Primer piso (Vip, Platino), Laterales, Segundo piso (Presidencial, General)
    - Accessibility icons: blue circles
    - Colors: 
        #C19C60 (VIP), #939393 (PLATINO), #8F6A2E (PRESIDENCIAL), #FF0000 (GENERAL)
--}}

<svg viewBox="0 0 771 1138" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <g id="Auditorio Stoa" clip-path="url(#clip0_172_2)">
        
        {{-- Escenario (Stage) --}}
        <g id="Escenario" filter="url(#filter0_d_172_2)">
            <path 
                id="Fondo" 
                d="M148 0H623V151C623 167.569 609.569 181 593 181H178C161.431 181 148 167.569 148 151V0Z" 
                fill="#333333"
            />
            <text 
                id="Titulo" 
                fill="white" 
                xml:space="preserve" 
                style="white-space: pre"  
                font-size="36" 
                font-weight="bold" 
                letter-spacing="0em"
            >
                <tspan x="280" y="104.091">{{ __('     STAGE') }}</tspan>
            </text>
        </g>

        {{-- Primer piso (First Floor) --}}
        <g id="Primer piso">
            <g id="Centrales">
                {{-- VIP Central --}}
                <g id="Vip">
                    {{-- VIP Derecha --}}
                    <g id="vipDerecha" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                        <rect 
                            id="Forma" 
                            x="408" y="221" 
                            width="190" height="190" 
                            rx="20" 
                            fill="#C19C60"
                        />
                        <text 
                            id="Texto" 
                            fill="white" 
                            xml:space="preserve" 
                            style="white-space: pre"  
                            font-size="24" 
                            font-weight="bold" 
                            letter-spacing="0em"
                        >
                            <tspan x="482.413" y="325.227">VIP</tspan>
                        </text>
                    </g>
                    {{-- VIP Izquierda --}}
                    <g id="Vip izquierda" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                        <rect 
                            id="Forma_2" 
                            x="178" y="221" 
                            width="190" height="190" 
                            rx="20" 
                            fill="#C19C60"
                        />
                        <text 
                            id="Texto_2" 
                            fill="white" 
                            xml:space="preserve" 
                            style="white-space: pre"  
                            font-size="24" 
                            font-weight="bold" 
                            letter-spacing="0em"
                        >
                            <tspan x="253.391" y="325.227">VIP</tspan>
                        </text>
                    </g>
                </g>
                {{-- Platino Central --}}
                <g id="Platino">
                    {{-- Platino Derecha --}}
                    <g id="Platino Derecha" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                        <rect 
                            id="Forma_3" 
                            x="407.978" y="451" 
                            width="190" height="190" 
                            rx="20" 
                            fill="#939393"
                        />
                        <text 
                            id="Texto_3" 
                            fill="white" 
                            xml:space="preserve" 
                            style="white-space: pre"  
                            font-size="24" 
                            font-weight="bold" 
                            letter-spacing="0em"
                        >
                            <tspan x="450.199" y="555.227">{{ __('PLATINUM') }}</tspan>
                        </text>
                        {{-- Accessibility icons --}}
                        <circle id="Accesibility"   cx="434" cy="477" r="10" fill="#155196"/>
                        <circle id="Accesibility_2" cx="460" cy="477" r="10" fill="#155196"/>
                        <circle id="Accesibility_3" cx="486" cy="477" r="10" fill="#155196"/>
                    </g>
                    {{-- Platino Izquierda --}}
                    <g id="Platino Izquierda" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                        <rect 
                            id="Forma_4" 
                            x="178" y="452" 
                            width="190" height="190" 
                            rx="20" 
                            fill="#939393"
                        />
                        <text 
                            id="Texto_4" 
                            fill="white" 
                            xml:space="preserve" 
                            style="white-space: pre"  
                            font-size="24" 
                            font-weight="bold" 
                            letter-spacing="0em"
                        >
                            <tspan x="221.199" y="556.227">{{ __('PLATINUM') }}</tspan>
                        </text>
                        {{-- Accessibility icons --}}
                        <circle id="Accesibility_4" cx="288" cy="478" r="10" fill="#155196"/>
                        <circle id="Accesibility_5" cx="314" cy="478" r="10" fill="#155196"/>
                        <circle id="Accesibility_6" cx="340" cy="478" r="10" fill="#155196"/>
                    </g>
                </g>
            </g>
            {{-- Laterales (Side VIPs) --}}
            <g id="Laterales">
                {{-- VIP Izquierda Lateral --}}
                <g id="Vip Izquierda" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <path 
                        id="Rectangle 11" 
                        d="M16 205.657C16 190.718 31.7825 181.052 45.0894 187.842L103.089 217.433C109.785 220.85 114 227.732 114 235.249V388.343C114 403.282 98.2175 412.948 84.9106 406.158L26.9106 376.567C20.2148 373.15 16 366.268 16 358.751V205.657Z" 
                        fill="#C19C60"
                    />
                    <text 
                        id="Titulo_2" 
                        fill="white" 
                        xml:space="preserve" 
                        style="white-space: pre"  
                        font-size="24" 
                        font-weight="bold" 
                        letter-spacing="0em"
                    >
                        <tspan x="45.3906" y="306.227">VIP</tspan>
                    </text>
                    <circle id="Accesibility_7" cx="36" cy="211" r="10" fill="#155196"/>
                </g>
                {{-- VIP Derecha Lateral --}}
                <g id="Vip derecha_2" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <path 
                        id="Forma_5" 
                        d="M658 234.249C658 226.732 662.215 219.85 668.911 216.433L726.911 186.842C740.217 180.052 756 189.718 756 204.657V357.751C756 365.268 751.785 372.15 745.089 375.567L687.089 405.158C673.783 411.948 658 402.282 658 387.343V234.249Z" 
                        fill="#C19C60"
                    />
                    <text 
                        id="Texto_5" 
                        fill="white" 
                        xml:space="preserve" 
                        style="white-space: pre"  
                        font-size="24" 
                        font-weight="bold" 
                        letter-spacing="0em"
                    >
                        <tspan x="687.391" y="305.227">VIP</tspan>
                    </text>
                    <circle id="Accesibility_8" cx="738" cy="211" r="10" fill="#155196"/>
                </g>
            </g>
        </g>

        {{-- Segundo piso (Second Floor) --}}
        <g id="Segundo piso">
            {{-- Background shape --}}
            <g id="Vector" filter="url(#filter1_d_172_2)">
                <path 
                    d="M132 660.28C132 676.848 145.431 690.28 162 690.28H613C629.569 690.28 643 676.848 643 660.28V482C643 465.431 656.431 452 673 452H741C757.569 452 771 465.431 771 482V716.28V787.73V1134C771 1150.57 757.569 1164 741 1164H30C13.4315 1164 0 1150.57 0 1134V482C0 465.431 13.4315 452 30 452H102C118.569 452 132 465.431 132 482V660.28Z" 
                    fill="white" 
                    fill-opacity="0.1" 
                    shape-rendering="crispEdges"
                />
            </g>
            {{-- Presidencial Izquierda --}}
            <g id="Presidencial Izquierda" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                <path 
                    id="Forma_6" 
                    d="M26 513.71C26 498.298 42.6964 488.678 56.0297 496.406L88.0297 514.955C94.201 518.532 98 525.125 98 532.258V651.29C98 666.702 81.3036 676.322 67.9703 668.594L35.9703 650.045C29.799 646.468 26 639.875 26 632.742V513.71Z" 
                    fill="#8F6A2E"
                />
                <text 
                    id="Texto_6" 
                    transform="matrix(0 -1 1 0 53 638)" 
                    fill="white" 
                    xml:space="preserve" 
                    style="white-space: pre"  
                    font-size="15" 
                    font-weight="bold" 
                    letter-spacing="0em"
                >
                    <tspan x="0.441895" y="14.4545">{{ __('PRESIDENTIAL') }}</tspan>
                </text>
            </g>
            {{-- Presidencial Derecha --}}
            <g id="Presidencial Derecha" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                <path 
                    id="Forma_7" 
                    d="M745 513.71C745 498.298 728.304 488.678 714.97 496.406L682.97 514.955C676.799 518.532 673 525.125 673 532.258V651.29C673 666.702 689.696 676.322 703.03 668.594L735.03 650.045C741.201 646.468 745 639.875 745 632.742V513.71Z" 
                    fill="#8F6A2E"
                />
                <text 
                    id="Texto_7" 
                    transform="matrix(0 -1 1 0 700 638)" 
                    fill="white" 
                    xml:space="preserve" 
                    style="white-space: pre"  
                    font-size="15" 
                    font-weight="bold" 
                    letter-spacing="0em"
                >
                    <tspan x="0.441895" y="14.4545">{{ __('PRESIDENTIAL') }}</tspan>
                </text>
            </g>
            {{-- Sección general --}}
            <g id="Sección general">
                {{-- General 2 (bottom) --}}
                <g id="General 2" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <path 
                        id="Forma_8" 
                        d="M416.368 899H128C111.431 899 98 912.431 98 929V989C98 1005.57 111.431 1019 128 1019H416.368H445.421H643C659.569 1019 673 1005.57 673 989V929C673 912.431 659.569 899 643 899H445.421H416.368Z" 
                        fill="#FF0000"
                    />
                    <text 
                        id="Texto_8" 
                        fill="white" 
                        xml:space="preserve" 
                        style="white-space: pre"  
                        font-size="24" 
                        font-weight="bold" 
                        letter-spacing="0em"
                    >
                        <tspan x="329.392" y="968.227">GENERAL</tspan>
                    </text>
                </g>
                {{-- General 1 (top) --}}
                <g id="General 1" class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <path 
                        id="Forma_9" 
                        d="M416.368 741H128C111.431 741 98 754.431 98 771V831C98 847.569 111.431 861 128 861H416.368H445.421H643C659.569 861 673 847.569 673 831V771C673 754.431 659.569 741 643 741H445.421H416.368Z" 
                        fill="#FF0000"
                    />
                    <text 
                        id="Texto_9" 
                        fill="white" 
                        xml:space="preserve" 
                        style="white-space: pre"  
                        font-size="24" 
                        font-weight="bold" 
                        letter-spacing="0em"
                    >
                        <tspan x="329.392" y="811.227">GENERAL</tspan>
                    </text>
                </g>
                {{-- Última fila (last row) --}}
                <path 
                    id="Ultima fila" 
                    d="M416.368 1047H115.5C105.835 1047 98 1054.84 98 1064.5C98 1074.16 105.835 1082 115.5 1082H416.368H445.421H655.5C665.165 1082 673 1074.16 673 1064.5C673 1054.84 665.165 1047 655.5 1047H445.421H416.368Z" 
                    fill="#FF0000"
                    class="hover:opacity-90 transition-opacity duration-300 ease-in-out cursor-pointer"
                />
            </g>
        </g>
    </g>

    {{-- SVG Definitions --}}
    <defs>
        <filter id="filter0_d_172_2" x="108" y="-35" width="555" height="261" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dy="5"/>
            <feGaussianBlur stdDeviation="20"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_172_2"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_172_2" result="shape"/>
        </filter>
        <filter id="filter1_d_172_2" x="-40" y="407" width="851" height="792" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dy="-5"/>
            <feGaussianBlur stdDeviation="20"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_172_2"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_172_2" result="shape"/>
        </filter>
        <clipPath id="clip0_172_2">
            <rect width="771" height="1138" fill="white"/>
        </clipPath>
    </defs>
</svg>
