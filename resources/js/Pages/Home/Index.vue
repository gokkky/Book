<template>
    <div>
        <Navbar class="sticky-top"></Navbar>
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="">
                            <div class="d-flex justify-content-between">
                                <p class="small">สินค้าขายดี</p>
                                <p class="small"><a href="#">ดูทั้งหมด</a></p>
                            </div>
                            <div class="d-flex mt-3" v-for="index in 4">
                                <div class="col-md-4">
                                    <img height="130" src="https://storage.naiin.com/system/application/bookstore/resource/product/201607/196975/6000021934_front_XXL.jpg?imgname=%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%AD%E0%B8%B1%E0%B8%99%E0%B8%95%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%9B%E0%B8%B5%E0%B8%A8%E0%B8%B2%E0%B8%88%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B8%8B%E0%B8%B2%E0%B8%81%E0%B8%B4-1"
                                        class="card-img-top" alt="Laptop" />
                                </div>
                                <div class="col-md-8">
                                    <div>
                                        <span>แฟ้มคดีกรมปราบปีศาจ เล่ม 6 (เล่มจบ)</span><br>
                                        <span class="text-secondary small">เมิ่งซีสือ</span>
                                    </div>

                                    <div class="d-flex mb-2 small mt-2">
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    
                                    <span>250.00 บาท</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 mb-3 text-center"><h4><b>หนังสือน่าอ่าน ที่ไม่ควรพลาด !!</b></h4></div>
                            <div v-for="index in 8" class="col-md-3 mb-4 mb-lg-0">
                                <div class="card mb-3" style="border: none;">
                                    <img height="200" src="https://storage.naiin.com/system/application/bookstore/resource/product/202205/548160/1000248652_front_XXL.jpg?imgname=%E0%B9%81%E0%B8%9F%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%94%E0%B8%B5%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%9B%E0%B8%A3%E0%B8%B2%E0%B8%9A%E0%B8%9B%E0%B8%B5%E0%B8%A8%E0%B8%B2%E0%B8%88-%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%A1-6-(%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%A1%E0%B8%88%E0%B8%9A)"
                                        class="card-img-top" alt="Laptop" />
                                    <div class="mt-3">

                                        <div>
                                            <span>แฟ้มคดีกรมปราบปีศาจ เล่ม 6 (เล่มจบ)</span><br>
                                            <span class="text-secondary small">เมิ่งซีสือ</span>
                                        </div>

                                        <div class="d-flex mb-2 small mt-2">
                                            <div class="ms-auto text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        
                                        <span class="small text-danger"><s>500.25 บาท</s></span>
                                        <span>
                                            250.00 บาท
                                        </span>
                                        <div class="d-flex flex-row mt-4">
                                            <button type="button" class="btn btn-primary flex-fill ms-1" style="border-radius: 30px;">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </div>
</template>

<script>
// import {inject, reactive} from "vue";
// import {Inertia} from "@inertiajs/inertia";
// import {usePage} from "@inertiajs/inertia-vue3";
// import Navbar from '@Pages/Home/Navbar'
import Navbar from "../../Layouts/Navbar";

export default {
    components: {
        Navbar
    },
    props: {
        // errors: Object
    }
}
</script>