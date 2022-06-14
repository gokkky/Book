<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b3d7ff;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" :href="route('home')">BOOK</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">สินค้าใหม่</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">สินค้าขายดี</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">สินค้าลดราคา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">สินค้าแนะนำ</a>
                        </li>
                    </ul>
                    
                    
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item">
                            <a class="nav-link" :href="route('cart.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <span class="badge badge-notify">3</span>
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#">เข้าสู่ระบบ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ลงทะเบียน </a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="https://live.staticflickr.com/6202/6046000670_4d5927f3d2_z.jpg" class="avatar" width="30" height="30"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    // import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
    // import BreezeNavLink from "@/Components/NavLink.vue";
    // import { Head } from "@inertiajs/inertia-vue3";
    // import { Link } from "@inertiajs/inertia-vue3";

    export default {
        
        components: {
            // BreezeAuthenticatedLayout,
            // Head,
            // BreezeNavLink,
            // Link,
        },
        mounted(){
        },
        data() {
            return {
                
            }
        },

        methods: {
            
        },

    }
</script>