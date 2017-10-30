---
cesis:
    headerTitle: 'Esmeijer Makelaardij en Taxatiebureau'
    headerSubTitle: 'Erkend Taxateur en Aankoopbemiddelaar'
    introTitle: 'Snel, betrouwbaar en met kwaliteit'
    introText: "Bent u op zoek naar een goedkope, snelle en kwalitatieve taxateur om uw huis of bedrijfspand te laten taxeren? Dan bent u bij Esmeijer Makelaardij en Taxatieburo aan het goede adres!\r\n\r\nVia deze website kunt u een taxatieaanvraag direct bij ons plaatsen. Indien u nog specifieke vragen of opmerkingen heeft, dan kunt u ons bellen op 0187 490143"
    backgroundImage:
        user/pages/01.home/Rotterdam.jpg:
            name: Rotterdam.jpg
            type: image/jpeg
            size: 536028
            path: user/pages/01.home/Rotterdam.jpg
form:
    name: contact-form
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
        -
            type: reset
            value: Reset
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---

