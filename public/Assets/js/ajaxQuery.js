
  
// user type on change event
$(document).on('change', '#userType', function () {
    var userType = $(this).val();
    switch (userType) {
        case '2':
            //show admin
            $('#admin').show();
            $('#employee').hide();
          
            $('#client').hide();
           
            $.ajax({
                url: '/fetch-admin-department',
                type: 'GET',
                success: function (response) {
                    const departmentId = response.id;
                    const department = response.department;
                    const designationId = response.designations.id;
                    const designation = response.designations.designation;
                    $('#department').empty();
                    $('#department').append(
                        '<option value="' + departmentId + '">' + department + '</option>'
                    );
                    $('#adminDesignation').empty();
                    $('#adminDesignation').append(
                        '<option value="' + designationId + '">' + designation + '</option>'
                    );
                }
            });
            break;
        case '3':
            //show Employee
            $('#admin').hide();
           
            $('#client').hide();
           
            $('#employee').show();
            break;
        case '4':
            //show Client
            $('#admin').hide();
           
            $('#employee').hide();
           
            $('#client').show();
            break;
        default:
            //hide all
            $('#admin').hide();
            $('#employee').hide();
            $('#client').hide();
    }
});
$(document).on('change', '#department', function () {
    var departmentId = $(this).val();
    $('#designation').empty();
    $.ajax({
        url: '/fetch-designation/' + departmentId,
        type: 'GET',
        success: function (response) {
            $.each(response, function (key, value) {
                var id = value.id;
                var designation = value.designation;
                var option = '<option value="' + id + '">' + designation + '</option>';
                $('#designation').append(option);
            });
        }
    });

});
$(document).on('click','.dropdown-item',function(){
const countryCode =$(this).attr('data-code');
console.log('country code :'+countryCode);
$('#countryCode').val(countryCode);

});
