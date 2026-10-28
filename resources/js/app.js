import 'bootstrap';
import $ from 'jquery';

window.$ = window.jQuery = $;

$(document).ready(function () {
    const courseSelect = $('#course_id');
    const availabilityBox = $('#availability');

    function loadAvailability() {
        const courseId = courseSelect.val();

        if (!courseId) {
            availabilityBox
                .removeClass('alert-info alert-success alert-danger')
                .addClass('alert')
                .text('🌸 Pilih kursus untuk melihat sisa kursi.');
            return;
        }

        availabilityBox
            .removeClass('alert-success alert-danger')
            .addClass('alert alert-info')
            .text('Memuat informasi sisa kursi...');

        $.ajax({
            url: '/courses/' + courseId + '/availability',
            method: 'GET',
            dataType: 'json',

            success: function (data) {
                availabilityBox
                    .removeClass('alert-info alert-danger')
                    .addClass('alert alert-success')
                    .text(
                        '🌸 ' + data.course +
                        ' — Sisa kursi: ' + data.remaining
                    );
            },

            error: function (xhr) {
                console.error('Ajax gagal:', xhr.status, xhr.responseText);

                availabilityBox
                    .removeClass('alert-info alert-success')
                    .addClass('alert alert-danger')
                    .text('Sisa kursi gagal dimuat. Periksa koneksi dan route.');
            }
        });
    }

    courseSelect.on('change', loadAvailability);

    if (courseSelect.val()) {
        loadAvailability();
    }
});