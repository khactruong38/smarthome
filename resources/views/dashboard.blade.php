@extends('index')
@section('content')
<div class="p-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-2">
                <i class="fas fa-th-large text-xl"></i>
                <span class="text-xl font-semibold">Smart Home</span>
            </div>
            <i class="fas fa-plus text-xl"></i>
        </div>

        <!-- Status Cards -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="bg-gray-800 p-4 rounded-lg flex items-center justify-between">
                <i class="fas fa-tint text-blue-500 text-2xl"></i>
                <span class="text-lg">75%</span>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg flex items-center justify-between">
                <i class="fas fa-thermometer-half text-yellow-500 text-2xl"></i>
                <span class="text-lg">27°C</span>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg flex items-center justify-between">
                <i class="fas fa-bolt text-red-500 text-2xl"></i>
                <span class="text-lg">55kWh</span>
            </div>
        </div>

        <!-- Rooms -->
        <div class="mb-4">
            <h2 class="text-lg font-semibold mb-2">Rooms</h2>
            <div class="flex space-x-2">
                <div class="bg-blue-600 p-4 rounded-lg flex items-center justify-between w-1/3">
                    <div role="button" id="phongKhach">
                        <span class="block text-sm">Phòng khách</span>
                        <span class="block text-xs">3 devices</span>
                    </div>
                    <i class="fas fa-tv text-xl"></i>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg flex items-center justify-between w-1/3">
                    <div role="button" id="phongNgu">
                        <span  class="block text-sm">  Phòng ngủ </span>
                        <span class="block text-xs">4 devices</span>
                    </div>
                    <i class="fas fa-bed text-xl"></i>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg flex items-center justify-between w-1/3">
                    <div role="button" id="nhaBep">
                        <span  class="block text-sm">Nhà bếp </span>
                        <span class="block text-xs">2 devices</span>
                    </div>
                    <i class="fas fa-utensils text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Gauge -->
        <div class="mb-4">
            <div class="bg-gray-800 p-6 rounded-lg flex justify-center items-center">
                <div class="relative">
                    <svg class="w-40 h-40">
                        <circle cx="80" cy="80" r="70" stroke="gray" stroke-width="10" fill="none" />
                        <circle cx="80" cy="80" r="70" stroke="white" stroke-width="10" fill="none" stroke-dasharray="440" stroke-dashoffset="440" />
                    </svg>
                    <div class="absolute inset-0 flex justify-center items-center text-2xl">0%</div>
                </div>
            </div>
        </div>

        <!-- Lights -->
        <div class="mb-4">
            <div id="showPhongNgu" >
            <h2 class="text-lg font-semibold mb-2">Phòng ngủ</h2>
            <div class="flex space-x-2">
                <div class="bg-gray-800 p-4 rounded-lg flex flex-col items-center w-1/3">
                    <span class="block text-sm mb-2">Overhead</span>
                    <div class="relative">
                        <input type="checkbox" class="hidden" id="overhead">
                        <label for="overhead" class="block w-12 h-6 bg-gray-600 rounded-full cursor-pointer"></label>
                        <div class="absolute top-0 left-0 w-6 h-6 bg-gray-400 rounded-full transition-transform transform translate-x-0"></div>
                    </div>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg flex flex-col items-center w-1/3">
                    <span class="block text-sm mb-2">Lamp</span>
                    <div class="relative">
                        <input type="checkbox" class="hidden" id="lamp" checked>
                        <label for="lamp" class="block w-12 h-6 bg-blue-600 rounded-full cursor-pointer"></label>
                        <div class="absolute top-0 left-0 w-6 h-6 bg-white rounded-full transition-transform transform translate-x-6"></div>
                    </div>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg flex flex-col items-center w-1/3">
                    <span class="block text-sm mb-2">Pendant</span>
                    <div class="relative">
                        <input type="checkbox" class="hidden" id="pendant">
                        <label for="pendant" class="block w-12 h-6 bg-gray-600 rounded-full cursor-pointer"></label>
                        <div class="absolute top-0 left-0 w-6 h-6 bg-gray-400 rounded-full transition-transform transform translate-x-0"></div>
                    </div>
                </div>
            </div>
            </div>
            
        </div>

        <!-- Navigation -->
        <div class="fixed bottom-0 left-0 right-0 bg-gray-800 p-4 flex justify-around items-center">
            <i class="fas fa-home text-xl"></i>
            <i class="fas fa-chart-bar text-xl"></i>
            <div class="bg-blue-600 p-2 rounded-full">
                <i class="fas fa-microphone text-xl"></i>
            </div>
            <i class="fas fa-bell text-xl"></i>
            <i class="fas fa-cog text-xl"></i>
        </div>
    </div>
@endsection
@section('script')




    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			$.ajax({
				url: "index1.php",
				type: "POST",
				success: function(data){
					$("#data1").html(data);
				}
			});
		});
	});
	</script>
    <script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			$.ajax({
				url: "index2.php",
				type: "POST",
				success: function(data){
					$("#data2").html(data);
				}
			});
		});
	});
	</script>

    <script>
			/* Mã Java */
		    function speech() {
		        // lấy tham chiếu output div
		        var output = document.getElementById("output");
		        // lấy tham chiếu action element
		        var action = document.getElementById("action");
                // Đối tượng nhận dạng giọng nói mới
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
            	// cài đặt ngôn ngữ 
				recognition.lang = 'vi-VN';
                // Điều này sẽ chạy khi nhận dạng giọng nói bắt đầu
                recognition.onstart = function() {
                    action.innerHTML = "<small><br>Đang lắng nghe....Hãy nói </small>";
                };
                
                recognition.onspeechend = function() {
                    action.innerHTML = "<small><br>Ngừng nghe, hy vọng bạn đã xong ...</small>";
                    recognition.stop();
                }
              
                // Điều này sẽ chạy khi nhận dạng giọng nói trả về kết quả
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    
                    output.innerHTML = "<b>Hiển thị:</b> " + transcript + "<br/>";
					document.getElementById('textt').setAttribute('value',transcript);

                    output.classList.remove("hide");
				
                };
                 recognition.start();
	        }
            document.querySelector('.cck').onmousemove = (e) => {

            const x = e.pageX - e.target.offsetLeft
            const y = e.pageY - e.target.offsetTop

            e.target.style.setProperty('--x', `${x}px`)
            e.target.style.setProperty('--y', `${y}px`)
            }
            

		</script>

@endsection