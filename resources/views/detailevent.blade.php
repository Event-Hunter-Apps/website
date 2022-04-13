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

    <title>eCommerce Product Detail</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/detailevent.css">

</head>

<body>

    <div class="container">
        <h1><b>Detail Event</b></h1>
        <div class="card-detail-event">
            <div class="wrapper-detail-event row">
                <div class="preview-detail-event tab-content">
                    <img src="./assets/img/Rectangle 43.png" height="400" />

                    <!-- <div class="tab-pane" id="pic-2"><img src="./assets/img/Rectangle 49.png" /></div>
                        <div class="tab-pane" id="pic-3"><img src="./assets/img/Rectangle 50.png" /></div> -->

                    <!-- <ul class="preview-thumbnail-detail-event nav nav-tabs">
                        <li>
                            <a data-target="#pic-1" data-toggle="tab"><img src="./assets/img/denise-jans-LRWGGldq3ow-unsplash.jpg" style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                        </li>
                        <li>
                            <a data-target="#pic-2" data-toggle="tab"><img src="./assets/img/denise-jans-LRWGGldq3ow-unsplash.jpg" style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                        </li>
                        <li>
                            <a data-target="#pic-3" data-toggle="tab"><img src="./assets/img/denise-jans-LRWGGldq3ow-unsplash.jpg" style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                        </li>
                    </ul> -->

                </div>
                <div class="details-detail-event">
                    <h2 class="product-title-detail-event"><b>Monas Jakarta</b></h2><br>

                    <!-- <h4 class="harga-detail-event" style="margin-top: -10px;"><b>Rp 25.000</b></h4> -->
                    <label for="">Date</label>
                    <div class="date-input-detail-event" style="margin-top: 5px;">
                        <input type="text" class="form-control datepicker1" id="start_date" name="start_date" value="START" disabled />

                        <input type="text" class="form-control datepicker1" id="end_date" name="end_date" value="END" disabled />

                    </div><br>
                    <label for="">Time</label>
                    <div class="time-input-detail-event">

                        <!-- <input type="time" name="time-start" id="time1">
                        <span class="line-time-detail-event"></span>
                        <span><input type="time" name="time-end" id="time2" style="margin-left: 65px;"></span> -->
                        <input type="text" class="form-control time-pickable" id="start_time" name="start_time" value="START" disabled />

                        <input type="text" class="form-control time-pickable" id="start_time" name="start_time" value="END" disabled />
                    </div> <br>
                    <div class="col-location">
                        <label for="">Location</label><br>
                        <textarea class="event-name-decoration" name="" id="" cols="30" rows="10" disabled required>{{ isset($event)?$event->deskripsi:'INI ISI LOKASI'}}</textarea>

                    </div>
                    <br>
                    <div>
                        <label for="">City</label><br>
                        <input class="event-city-decoration @error('kota') is-invalid @enderror" type="text" name="kota" id="pos-edit" value="{{ isset($event)?$event->kota:'CITY' }}" disabled>
                    </div>
                    @error('kota')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <br>

                    <ul class="tags-detail-event">
                        <li class="tag-detail-event">Fun Activities</li>
                        <li class="tag-detail-event">Explorer Indonesia</li>
                        <li class="tag-detail-event">Trip</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="description-detail-event">
            <div class="description-title-detail-event">
                <b>Description</b>

                <textarea class="event-name-decoration" name="" id="" cols="30" rows="10" disabled required>{{ isset($event)?$event->deskripsi:'INI ISI DESKRIPSI'}}</textarea>

            </div>
        </div>

        <div class="btn-disc-save-detail-event">
            <a href="/category">
                <button id="btn-save-detail-event"><b>Check Availability</b></button>
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