$(document).on('change','#user_simple_province, #user_simple_region, #user_simple_district ',function () {
    let $field = $(this);

    let $provinceField = $('#user_simple_province');
    let $regionField = $('#user_simple_region');
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
