<?php
add_shortcode('shortcode_index_ty_gia', 'create_shortcode_index_ty_gia');
function create_shortcode_index_ty_gia()
{
    ob_start(); // Bắt đầu bắt lấy output

    // Bắt đầu vẽ giao diện HTML
?>
    <div class="col-inner">
        <h1 class="entry-title">Tỷ giá ABBank hôm nay <span>05/04/2024</span> – Tỷ giá ABBank</h1>
        <p class="text-black-cmt"><strong>Cập nhật liên tục theo giờ trong ngày bảng tỷ giá hối đoái tại ngân hàng thương mại cổ phần Ngoại thương Việt Nam (Vietcombank)</strong></p>
        <p class="fs-14 text-black-cmt">Bạn đọc sẽ nhanh chóng theo dõi, nắm bắt được sự thay đổi của tỷ giá USD, tỷ giá Euro, tỷ giá man, Giá Yên Nhật….</p>
        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_586387794">
            <div class="img-inner dark">
                <img fetchpriority="high" decoding="async" width="650" height="430" src="https://chogia.viit.com.vn/wp-content/uploads/2024/02/Cac-dich-vu-tai-ngan-hang-vietcombank.webp" class="attachment-large size-large" alt="" srcset="https://chogia.viit.com.vn/wp-content/uploads/2024/02/Cac-dich-vu-tai-ngan-hang-vietcombank.webp 650w, https://chogia.viit.com.vn/wp-content/uploads/2024/02/Cac-dich-vu-tai-ngan-hang-vietcombank-300x198.webp 300w" sizes="(max-width: 650px) 100vw, 650px">
            </div>
        </div>
        <p class="text-black-cmt">Để tra cứu tỷ giá ngoại tệ Vietcombank của những ngày trước đó, bạn đọc vui lòng lựa chọn thời gian trong bảng dưới.</p>
        <div id="text-1781118245" class="text-center">
            <h2 class="fs-4 text-black-cmt"><span>Bảng tỷ giá Vietcombank ngày 05/04/2024</span></h2>
        </div>
    </div>
    <div class="col-inner">
        <div id="text-1866575507" class="text overflow-auto text-black-cmt">
            <div>
                <div class="flex-end-center flex-wrap mb-10">
                    <p class="mb-0 fs-12 text-black-cmt right">Đơn vị: Việt Nam đồng</p>
                </div>
                <table class="exchange-rate-bank__table">
                    <thead>
                        <tr>
                            <th>Mã ngoại tệ</th>
                            <th>Tên ngoại tệ</th>
                            <th>Bán</th>
                            <th>Mua</th>
                            <th>Chuyển khoản</th>
                        </tr>
                    </thead>
                    <tbody>
                    <style>
                        .image-30-20 {
                            width: 30px;
                            height: 20px;
                            display: inline-flex;
                            margin: 0 10px 0 0;
                        }
                        .image-30-20 span{
                            text-transform: uppercase;
                        }
                        .exchange-rate-bank__table td {
                            text-transform: uppercase;
                            color: #2d95e3;
                            font-size: 17px;
                        }
                    </style>
                        <?php
                        $api_url = 'https://apichogia.viit.com.vn/api/json/ngan-hang?slug=vietcombank';
                        $data = file_get_contents($api_url);
                        $exchangeRates = json_decode($data, true);

                        if (isset($exchangeRates['shows']) && is_array($exchangeRates['shows'])) {
                            foreach ($exchangeRates['shows'] as $rate) {
                                echo '<tr>';
                                echo '<td><img class="image-30-20" src="https://webtygia.com/storage/' . $rate['currency']['image'] . '"  <span>' . $rate['currency']['name'] . ' </span></td>';
                                echo '<td>' . $rate['currency']['title'] . '</td>';
                                echo '<td>' . number_format($rate['sell']) . '</td>';
                                echo '<td>' . number_format($rate['buy']) . '</td>';
                                echo '<td>' . number_format($rate['transfer']) . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5">Không có dữ liệu</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-inner">
        <p class="mgr-t-50 fs-16 text-black-cmt">Bảng tỷ giá vcb, giá usd vietcombank cập nhật theo thời gian thực từ hội sở chính</p>
        <h2 id="thong-tin-ngan-hang-tmcp-ngoai-thuong-viet-nam" class="ftwp-heading text-black-cmt"><p class="font-weight-bolder fs-20">Thông tin ngân hàng TMCP Ngoại thương Việt Nam</p></h2>
        <ul>
            <li class="text-black-cmt">Năm thành lập: 1963</li>
            <li class="text-black-cmt">Vốn điều lệ: 20 tỷ đồng</li>
            <li class="text-black-cmt">Chủ tịch HĐQT: Phạm Quang Dũng</li>
            <li class="text-black-cmt">Tổng giám đốc: Nguyễn Thanh Tùng</li>
            <li class="text-black-cmt">Trụ sở chính: 198 Trần Quang Khải, Hoàn Kiếm,&nbsp;Hà Nội,&nbsp;Việt Nam</li>
            <li class="text-black-cmt">Mã cổ phiếu: VCB</li>
            <li class="text-black-cmt">Website:&nbsp;<a href="https://vietcombank.com.vn/">vietcombank.com.vn</a></li>
        </ul>
        <p class="fs-14 text-black-cmt">Ngân hàng Vietcombank hiện có hơn 14.000 cán bộ nhân viên, với hơn 400 Chi nhánh/Phòng Giao dịch/Văn phòng đại diện/Đơn vị thành viên trong và ngoài nước, gồm 1 Hội sở chính tại Hà Nội, 1 Chi nhánh Sở Giao Dịch, 1 Trung tâm Đào tạo, 89 chi nhánh và hơn 350 phòng giao dịch trên toàn quốc, 2 công ty con tại Việt Nam, 2 công ty con và 1 văn phòng đại diện tại nước ngoài, 6 công ty liên doanh, liên kết.</p>
        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_356037125">
            <div class="img-inner dark">
                <img decoding="async" width="1020" height="641" src="https://chogia.viit.com.vn/wp-content/uploads/2024/02/huong-dan-mo-the-ghi-no-ngan-hang-vietcombank-1024x644.webp" class="attachment-large size-large" alt="" srcset="https://chogia.viit.com.vn/wp-content/uploads/2024/02/huong-dan-mo-the-ghi-no-ngan-hang-vietcombank-1024x644.webp 1024w, https://chogia.viit.com.vn/wp-content/uploads/2024/02/huong-dan-mo-the-ghi-no-ngan-hang-vietcombank-300x189.webp 300w, https://chogia.viit.com.vn/wp-content/uploads/2024/02/huong-dan-mo-the-ghi-no-ngan-hang-vietcombank-768x483.webp 768w, https://chogia.viit.com.vn/wp-content/uploads/2024/02/huong-dan-mo-the-ghi-no-ngan-hang-vietcombank.webp 1135w" sizes="(max-width: 1020px) 100vw, 1020px">
            </div>
        </div>
        <p class="text-black-cmt">Bên cạnh đó, Vietcombank còn phát triển một hệ thống Autobank với hơn 2.100 máy ATM và trên 49.500 điểm chấp nhận thanh toán thẻ (POS) trên Việt Nam.</p>
        <p class="text-black-cmt">Quý 2 năm 2022, Tổng tài sản ngân hàng Vietcombank ước tính hơn 1,462,748 tỷ đồng. Với hơn 20.730 nhân viên trên toàn quốc</p>
    </div>
    <div class="col-inner">
        <div class="chart_exchangerate">
            <select name="currencies" id="currencies">
            </select>
            <canvas id="exchangeRateChart" style="max-width: 700px; max-height: 600px;"></canvas>
        </div>
        <script>
            const eleCurrencies = document.querySelector("#currencies")
            var chart

            function addEleOptions(eleSelect, options) {
                eleSelect.innerHTML = ''
                if (options) {
                    options.forEach(element => {
                        const eleOption = document.createElement('option')
                        eleOption.value = element[0]
                        eleOption.textContent = element[1][0].currency ? element[1][0].currency.title : ''
                        eleSelect.appendChild(eleOption)
                    })
                }
            }

            function createChart(xAxis, yBuy, ySell, yTransfer, title, reset = false) {
                if (reset && chart) {
                    chart.destroy();
                }

                chart = new Chart("exchangeRateChart", {
                    type: "line",
                    backgroundColor: "#F5DEB3",
                    data: {
                        labels: xAxis,
                        datasets: [{
                                label: 'Giá mua',
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,0,255,1.0)",
                                borderColor: "rgba(0,0,255,0.1)",
                                // hoverBorderWidth: 10,
                                // hoverBorderDashOffset: 5,
                                data: yBuy,
                            },
                            {
                                label: 'Giá bán',
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(255,0,255,1.0)",
                                borderColor: "rgba(255,0,255,0.1)",
                                // hoverBorderWidth: 10,
                                // hoverBorderDashOffset: 5,
                                data: ySell,
                                pointStyle: 'triangle',
                            },
                            {
                                label: 'Giá chuyển khoản',
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,200,10,1.0)",
                                borderColor: "rgba(0,200,10,0.2)",
                                // hoverBorderWidth: 10,
                                // hoverBorderDashOffset: 5,
                                data: yTransfer,
                                pointStyle: 'rect',
                            }
                        ]
                    },
                    options: {
                        layout: {
                            padding: 0,
                        },
                        elements: {
                            line: {},
                            point: {
                                hoverBorderWidth: 20,
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: title,
                                font: {
                                    size: 20,
                                },
                                color: '#000',
                                position: 'top',
                                padding: {
                                    bottom: 20,
                                    top: 20,
                                }
                            },
                            legend: {
                                position: 'bottom',
                                fullSize: false,
                                labels: {
                                    usePointStyle: true,
                                    color: 'black',
                                    useBorderRadius: true,

                                },
                                title: {
                                    color: 'red',
                                },
                            },
                            tooltip: {
                                position: 'nearest',
                                backgroundColor: 'rgba(255,255,255,0.7)',
                                titleColor: '#000',
                                bodyColor: '#000',
                                usePointStyle: true,
                                borderColor: 'lightblue',
                                borderWidth: 1,
                                caretPadding: 10,
                                caretSize: 0
                            },

                        },
                        interaction: {
                            mode: 'index',
                            intersect: false,
                            axis: 'x',
                            includeInvisible: true,
                        },
                        scales: {
                            x: {
                                display: true,
                                title: {
                                    display: true,
                                    text: 'Ngày',
                                },
                                grid: {
                                    display: true,
                                    color: '#fff',
                                },
                                ticks: {
                                    beginAtZero: true,
                                    color: '#000',
                                },
                                offset: true,
                            },
                            y: {
                                display: true,
                                color: '#000',
                                weight: 50,
                                title: {
                                    display: true,
                                    text: 'Việt Nam đồng',
                                    color: '#000'
                                },
                                ticks: {
                                    display: true,
                                    color: '#000',
                                    padding: 20,
                                    showLabelBackdrop: true,
                                    font: 20,
                                    major: {
                                        enabled: true,
                                        color: 'yellow',
                                        width: 10,
                                    },
                                },
                                offset: true,
                            },
                        }
                    },

                });
            }

            function showChart(cur = null, reset = false) {
                fetch('https://apichogia.viit.com.vn/api/json/bank_history?slug=ABBANK&range_date=7')
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        const currencies = Object.entries(data.shows_history)
                        const bank = data.bank
                        const historyCurrency = cur ? data.shows_history[cur].reverse() : data.shows_history[currencies[0][0]].reverse();
                        let xAxis = []
                        let yBuy = []
                        let ySell = []
                        let yTransfer = []
                        addEleOptions(eleCurrencies, currencies)

                        historyCurrency.forEach((element, index) => {
                            if (index <= 7) {
                                xAxis.push(new Date(element.date).toLocaleDateString('vi'))
                                yBuy.push(element.buy)
                                ySell.push(element.sell)
                                yTransfer.push(element.transfer)
                            }
                        });
                        var title = 'Biểu đồ tỷ giá ' + bank.name
                        createChart(xAxis, yBuy, ySell, yTransfer, title, reset)

                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });
            }
            setTimeout(() => {
                showChart(false)
            }, 1500)
            eleCurrencies.addEventListener("change", function() {
                showChart(this.value, true)
            })
        </script>
    </div>
<?php

    // Kết thúc bắt lấy output
    return ob_get_clean();
}
?>