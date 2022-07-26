<h1>Napiš mi</h1>

<form id="contact_form" data-bind="submit: handleSubmit, validationOptions: { insertMessages: false }">
    <div class="form_row">
        <input data-bind="textInput: firstName, class: invalidValueFirstName" placeholder="Jméno">
        <input data-bind="textInput: lastName, class: invalidValueLastName" placeholder="Příjmení">
    </div>

    <div class="form_row">
        <input data-bind="textInput: email, class: invalidValueEmail" id="input_without_margin" placeholder="Email">
        <input data-bind="textInput: subject, class: invalidValueSubject" placeholder="Předmět">
    </div>
    <textarea data-bind="textInput: text, class: invalidValueText" rows="3" placeholder="Text"></textarea>

    <input data-bind="class: disabledSubmit" type="submit" name="submit" value="Odeslat">
</form>

<script>
    function ContactFormViewModel(){
        var self = this;

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

    var knockout_app = document.querySelector("#contact_form");
    ko.applyBindings(new ContactFormViewModel(), knockout_app);
</script>