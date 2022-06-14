<template>
    <div>
        <Navbar class="sticky-top"></Navbar>
        <section class="h-100 gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <form class="p-3">
                            <div class="row mb-2">
                                <div class="col">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>นามสกุล</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <label>ประเทศ</label>
                            <input type="text" class="form-control mb-2">
                            <label>ที่อยู่</label>
                            <input type="text" class="form-control mb-2">
                            <div class="row mb-2">
                                <div class="col">
                                    <label>แขวง/ตำบล</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>เขต/อำเภอ</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <label>จังหวัด</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <label>เบอร์ติดต่อ(กรุณาระบุหมายเลขโทรศัพท์ เฉพาะตัวเลขเท่านั้น)</label>
                            <input type="number" class="form-control">
                        </form>
                    </div>
                    <div class="card mb-4">
                    <div class="card-body">
                        <p><strong>เลือกขนส่ง</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label><br>
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label>
                        </div>
                    </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                    <div class="card-body">
                        <p><strong>วิธีชำระเงิน</strong></p>
                        <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                        alt="Visa" />
                        <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                        alt="American Express" />
                        <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                        alt="Mastercard" />
                        <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
                        alt="PayPal acceptance mark" />
                    </div>
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

                        <button type="button" class="btn btn-primary btn-lg btn-block" style="border-radius: 25px">
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
        
    }
}
</script>