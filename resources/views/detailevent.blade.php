<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://use.fontawesome.com/fb48fadd01.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>{{isset($title)?$title:''}}</title>
    <link rel="icon" href="{{asset('assets/img/1.png')}}"/>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/detailevent.css')}}">

</head>

<body>

    <div class="container mt-5">
        <h1><b>Detail Event</b></h1>
        <div class="card-detail-event">
            <div class="wrapper-detail-event row">
                <div class="preview-detail-event tab-content">
                    <img src="{{$event->imageUrl}}" height="400" />
                </div>
                <div class="details-detail-event">
                    <h2 class="product-title-detail-event"><b>{{isset($event)?$event->nama:''}}</b></h2><br>
                    <div>
                        <label for="">Price</label><br>
                        <input class="event-city-decoration" type="text" name="kota" id="pos-edit" value="Rp {{isset($event)?$event->idrPrice:''}}" disabled>
                    </div>
                    <!-- <h4 class="harga-detail-event" style="margin-top: -10px;"><b>Rp 25.000</b></h4> -->
                    <label for="">Date</label>
                    <div class="date-input-detail-event" style="margin-top: 5px;">
                        <input type="text" class="form-control datepicker1" id="start_date" name="start_date" value="{{isset($event)?$event->tanggal_mulai:''}}" disabled />

                        <input type="text" class="form-control datepicker1" id="end_date" name="end_date" value="{{isset($event)?$event->tanggal_berakhir:''}}" disabled />

                    </div><br>
                    <label for="">Time</label>
                    <div class="time-input-detail-event">
                        <input type="text" class="form-control time-pickable" id="start_time" name="start_time" value="{{isset($event)?$event->jam_buka:''}}" disabled />

                        <input type="text" class="form-control time-pickable" id="start_time" name="start_time" value="{{isset($event)?$event->jam_tutup:''}}" disabled />
                    </div> <br>
                    <div class="col-location">
                        <label for="">Location</label><br>
                        <textarea class="event-name-decoration" name="" id="" cols="30" rows="10" disabled required>{{isset($event)?$event->lokasi:''}}</textarea>

                    </div>
                    <br>
                    <div>
                        <label for="">City</label><br>
                        <input class="event-city-decoration @error('kota') is-invalid @enderror" type="text" name="kota" id="pos-edit" value="{{isset($event)?$event->kota:''}}" disabled>
                    </div>
                 
                    <br>
                    <br>

                    {{-- <ul class="tags-detail-event">
                        <li class="tag-detail-event">Fun Activities</li>
                        <li class="tag-detail-event">Explorer Indonesia</li>
                        <li class="tag-detail-event">Trip</li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <div class="description-detail-event">
            <div class="description-title-detail-event">
                <b>Description</b>

                <textarea class="event-name-decoration" name="" id="" cols="30" rows="10" disabled required>{{isset($event)?$event->deskripsi:''}}</textarea>

            </div>
        </div>

        <div class="btn-disc-save-detail-event">
            <a href="/category">
                <a href="/events/{{isset($event)?$event->id:''}}/tikets"><button id="btn-save-detail-event"><b>Check Availability</b></button></a>
            </a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.eyecon.ro/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function() {

            $('.datepicker1').datepicker({
                format: 'dd-mm-yyyy',
                todayHighlight: true,
                toggleActive: true
            });

        });

        function activate() {
            document.head.insertAdjacentHTML("beforeend", `
		<style>
			.time-picker {
				position: absolute;
				display: inline-block;
				padding: 10px;
				background: #eeeeee;
				border-radius: 6px;
			}

			.time-picker__select {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				outline: none;
				text-align: center;
				border: 1px solid #dddddd;
				border-radius: 6px;
				padding: 6px 10px;
				background: #ffffff;
				cursor: pointer;
				font-family: 'Heebo', sans-serif;
			}
		</style>
	`);

            document.querySelectorAll(".time-pickable").forEach(timePickable => {
                let activePicker = null;

                timePickable.addEventListener("focus", () => {
                    if (activePicker) return;

                    activePicker = show(timePickable);

                    const onClickAway = ({
                        target
                    }) => {
                        if (
                            target === activePicker ||
                            target === timePickable ||
                            activePicker.contains(target)
                        ) {
                            return;
                        }

                        document.removeEventListener("mousedown", onClickAway);
                        document.body.removeChild(activePicker);
                        activePicker = null;
                    };

                    document.addEventListener("mousedown", onClickAway);
                });
            });
        }

        function show(timePickable) {
            const picker = buildPicker(timePickable);
            const {
                bottom: top,
                left
            } = timePickable.getBoundingClientRect();

            picker.style.top = `${top}px`;
            picker.style.left = `${left}px`;

            document.body.appendChild(picker);

            return picker;
        }

        function buildPicker(timePickable) {
            const picker = document.createElement("div");
            const hourOptions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12].map(numberToOption);
            const minuteOptions = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55].map(numberToOption);

            picker.classList.add("time-picker");
            picker.innerHTML = `
		<select class="time-picker__select">
			${hourOptions.join("")}
		</select>
		:
		<select class="time-picker__select">
			${minuteOptions.join("")}
		</select>
		<select class="time-picker__select">
			<option value="AM">am</option>
			<option value="PM">pm</option>
		</select>
	`;

            const selects = getSelectsFromPicker(picker);

            selects.hour.addEventListener("change", () => timePickable.value = getTimeStringFromPicker(picker));
            selects.minute.addEventListener("change", () => timePickable.value = getTimeStringFromPicker(picker));
            selects.meridiem.addEventListener("change", () => timePickable.value = getTimeStringFromPicker(picker));

            if (timePickable.value) {
                const {
                    hour,
                    minute,
                    meridiem
                } = getTimePartsFromPickable(timePickable);

                selects.hour.value = hour;
                selects.minute.value = minute;
                selects.meridiem.value = meridiem;
            }

            return picker;
        }

        function getTimePartsFromPickable(timePickable) {
            const pattern = /^(\d+):(\d+) (am|pm)$/;
            const [hour, minute, meridiem] = Array.from(timePickable.value.match(pattern)).splice(1);

            return {
                hour,
                minute,
                meridiem
            };
        }

        function getSelectsFromPicker(timePicker) {
            const [hour, minute, meridiem] = timePicker.querySelectorAll(".time-picker__select");

            return {
                hour,
                minute,
                meridiem
            };
        }

        function getTimeStringFromPicker(timePicker) {
            const selects = getSelectsFromPicker(timePicker);

            return `${selects.hour.value}:${selects.minute.value} ${selects.meridiem.value}`;
        }

        function numberToOption(number) {
            const padded = number.toString().padStart(2, "0");

            return `<option value="${padded}">${padded}</option>`;
        }

        activate();
    </script>
</body>

</html>