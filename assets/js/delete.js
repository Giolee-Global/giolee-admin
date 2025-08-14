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


//Quote Delete Trigger
function confirmQuoteDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-quote").id.value = id;
    $("#quoteDeleteModal").modal("show");
}


//Certificate Delete Trigger
function confirmCertificateDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-certificate").id.value = id;
    $("#certificateDeleteModal").modal("show");
}


//Team Member Delete Trigger
function confirmTeamDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-team").id.value = id;
    $("#teamDeleteModal").modal("show");
}



//FAQ Member Delete Trigger
function confirmFaqDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-faq").id.value = id;
    $("#faqDeleteModal").modal("show");
}


//Job Delete Trigger
function confirmJobDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-job").id.value = id;
    $("#jobDeleteModal").modal("show");
}


//Project Category Delete Trigger
function confirmProjectCategoryDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-project-category").id.value = id;
    $("#projectCategoryDeleteModal").modal("show");
}



//Project Delete Trigger
function confirmProjectDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-project").id.value = id;
    $("#projectDeleteModal").modal("show");
}