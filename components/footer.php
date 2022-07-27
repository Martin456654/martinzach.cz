    <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script> -->

    <!-- <script src="js/switch_page.js"></script> -->

    <script src="js/arrow_down_slide.js"></script>
    <script src="js/skills_animation.js"></script>
    <script src="js/typing.js"></script>

    <script>
        function KnockoutAppViewModel(){
            var self = this;

            // switch pages
            self.activePage = ko.observable(3);
            console.log(self.activePage());

            self.actualPageClass1 = ko.pureComputed(function(){
                return self.activePage() === 1 ? "showAll" : "";
            });
            self.actualPageClass2 = ko.pureComputed(function(){
                return self.activePage() === 2 ? "showAll" : "";
            });
            self.actualPageClass3 = ko.pureComputed(function(){
                return self.activePage() === 3 ? "showAll" : "";
            });
            self.actualPageClass4 = ko.pureComputed(function(){
                return self.activePage() === 4 ? "showAll" : "";
            });
            self.actualPageClass5 = ko.pureComputed(function(){
                return self.activePage() === 5 ? "showAll" : "";
            });



            self.pageActiveButton1 = ko.pureComputed(function(){
                return self.activePage() === 1 ? "green" : "";
            });
            self.pageActiveButton2 = ko.pureComputed(function(){
                return self.activePage() === 2 ? "green" : "";
            });
            self.pageActiveButton3 = ko.pureComputed(function(){
                return self.activePage() === 3 ? "green" : "";
            });
            self.pageActiveButton4 = ko.pureComputed(function(){
                return self.activePage() === 4 ? "green" : "";
            });
            self.pageActiveButton5 = ko.pureComputed(function(){
                return self.activePage() === 5 ? "green" : "";
            });

            self.setActualPage = (page) => {
                self.activePage(page);
            };

            // page 3 -> form validation
            self.firstName = ko.observable("").extend({
                required: true,
                minLength: 3
            });

            self.lastName = ko.observable("").extend({
                required: true,
                minLength: 3
            });

            self.email = ko.observable("").extend({
                required: true,
                email: true
            });

            self.subject = ko.observable("").extend({
                required: true
            });

            self.text = ko.observable("").extend({
                required: true,
                minLength: 20
            });

            self.invalidValue = ko.pureComputed(function(){
                let variable = self.firstName();

                if(variable == ""){
                    return true;
                }
                return self.firstName.isValid() ? "" : "missingInput";
            })

            self.invalidValueFirstName = ko.pureComputed(function(){
                if(self.firstName() == ""){
                    return false;
                }
                return self.firstName.isValid() ? "" : "missingInput";
            });

            self.invalidValueLastName = ko.pureComputed(function(){
                if(self.lastName() == ""){
                    return false;
                }
                return self.lastName.isValid() ? "" : "missingInput";
            });

            self.invalidValueEmail = ko.pureComputed(function(){
                if(self.email() == ""){
                    return false;
                }
                return self.email.isValid() ? "" : "missingInput";
            });

            self.invalidValueSubject = ko.pureComputed(function(){
                if(self.subject() == ""){
                    return false;
                }
                return self.subject.isValid() ? "" : "missingInput";
            });

            self.invalidValueText = ko.pureComputed(function(){
                if(self.text() == ""){
                    return false;
                }
                return self.text.isValid() ? "" : "missingInput";
            });

            self.disabledSubmit = ko.pureComputed(function(){
                var errors = ko.validation.group(self);
                if(errors().length > 0){
                    return "disabled";
                }
            })

            self.handleSubmit = () => {
                var errors = ko.validation.group(self);
                if(errors().length > 0){
                    return;
                }

                $.redirect("send_form.php", {
                    jmeno: self.firstName(),
                    prijmeni: self.lastName(),
                    email: self.email(),
                    predmet: self.subject(),
                    text: self.text()
                });
            }
        }

        var knockout_app = document.querySelector("#knockout_app");
        ko.applyBindings(new KnockoutAppViewModel(), knockout_app);
        
        // remove comments from code
        $(function(){
            $("*").contents().each(function(){
                if(this.nodeType === Node.COMMENT_NODE){
                    $(this).remove();
                }
            })
        })
    </script>

    <?php

    if(isset($_GET["page"])){
        echo "<script>switchPage(" . $_GET["page"] . ")</script>";
    }

    ?>
</html>