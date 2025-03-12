// JavaScript to Populate Modals

var viewStudentModal = document.getElementById('viewStudentModal');
viewStudentModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var firstname = button.getAttribute('data-firstname');
    var lastname = button.getAttribute('data-lastname');
    var course = button.getAttribute('data-course');
    var sex = button.getAttribute('data-sex');
    var size = button.getAttribute('data-size');
    var paymentstatus = button.getAttribute('data-paymentstatus');

    document.getElementById('view-id').textContent = id;
    document.getElementById('view-firstname').textContent = firstname;
    document.getElementById('view-lastname').textContent = lastname;
    document.getElementById('view-course').textContent = course;
    document.getElementById('view-sex').textContent = sex;
    document.getElementById('view-size').textContent = size;
    document.getElementById('view-paymentstatus').textContent = paymentstatus;
});

var editStudentModal = document.getElementById('editStudentModal');
editStudentModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var firstname = button.getAttribute('data-firstname');
    var lastname = button.getAttribute('data-lastname');
    var course = button.getAttribute('data-course');
    var sex = button.getAttribute('data-sex');
    var size = button.getAttribute('data-size');
    var paymentstatus = button.getAttribute('data-paymentstatus');

    document.getElementById('edit-id').value = id;
    document.getElementById('edit-firstname').value = firstname;
    document.getElementById('edit-lastname').value = lastname;
    document.getElementById('edit-course').value = course;
    document.getElementById('edit-sex').value = sex;
    document.getElementById('edit-size').value = size;
    document.getElementById('edit-paymentstatus').value = paymentstatus;
});

var deleteStudentModal = document.getElementById('deleteStudentModal');
deleteStudentModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    document.getElementById('delete-id').value = id;
});
