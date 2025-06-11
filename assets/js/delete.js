//Admin Delete Trigger
function confirmAdminDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-admin").id.value = id;
    $("#adminDeleteModal").modal("show");
}


//Support Delete Trigger
function confirmSupportDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-support").id.value = id;
    $("#supportDeleteModal").modal("show");
}