<h1>Napiš mi</h1>

<form data-bind="submit: handleSubmit, validationOptions: { insertMessages: false }">
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