$(document).on('change','#registration_form_province, #registration_form_region, #registration_form_district ',function () {
    let $field = $(this);

    let $provinceField = $('#registration_form_province');
    let $regionField = $('#registration_form_region');
    let $form = $field.closest('form');
    let target = '#' + $field.attr('id').replace('district','commune').replace('region','district').replace('province','region');
    let data = {};
    data[$provinceField.attr('name')] = $provinceField.val();
    data[$regionField.attr('name')] = $regionField.val();
    data[$field.attr('name')] = $field.val();
    $.post($form.attr('action'),data).then(function (data) {
        let $input = $(data).find(target);
        $(target).replaceWith($input);
    })
});
