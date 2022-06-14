<template>
    <div>
        <Navbar class="sticky-top"></Navbar>
        <section class="h-100 gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" width="400">สินค้า</th>
                                <th scope="col">ราคา</th>
                                <th scope="col" width="100">จำนวน</th>
                                <th scope="col">ยอดรวม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="index in 3">
                                    <th scope="row">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img height="130" src="https://storage.naiin.com/system/application/bookstore/resource/product/201607/196975/6000021934_front_XXL.jpg?imgname=%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%AD%E0%B8%B1%E0%B8%99%E0%B8%95%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%9B%E0%B8%B5%E0%B8%A8%E0%B8%B2%E0%B8%88%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B8%8B%E0%B8%B2%E0%B8%81%E0%B8%B4-1"
                                                    class="card-img-top" />
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <span>แฟ้มคดีกรมปราบปีศาจ เล่ม 6 (เล่มจบ)</span><br>
                                                    <span class="text-secondary small">เมิ่งซีสือ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>THB250.00</td>
                                    <td>
                                        <input type="number" name="count" class="form-control" value="0" min=0>
                                    </td>
                                    <td>THB250.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                    <div class="card-header py-3">
                        <h3 class="mb-0">สรุปคำสั่งซื้อ</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            ยอดรวม
                            <span>$53.98</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            ค่าส่ง
                            <span>$53.98</span>
                        </li>
                        <li
                            class="mt-3 list-group-item d-flex justify-content-between align-items-center px-0 mb-3">
                            <div>
                            <strong>ยอดสุทธิ</strong>
                            </div>
                            <span><strong>THB500.00</strong></span>
                        </li>
                        </ul>

                        <button type="button" @click="submit()" class="btn btn-primary btn-lg btn-block" style="border-radius: 25px">
                            ไปชำระเงิน
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
    </div>
</template>

<script>
import Navbar from "../../Layouts/Navbar";

export default {
    components: {
        Navbar
    },
    props: {
        
    },
    methods : {
        submit(){
            this.$inertia.get(this.route('cart.pay'), {
            });
        }
    }
}
</script>