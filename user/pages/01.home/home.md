---
cesis:
    headerTitle: 'Esmeijer Makelaardij en Taxatiebureau'
    headerSubTitle: 'Erkend Taxateur en Aankoopbemiddelaar'
    introTitle: 'Snel, betrouwbaar en met kwaliteit'
    introText: "Bent u op zoek naar een goedkope, snelle en kwalitatieve taxateur om uw huis of bedrijfspand te laten taxeren? Dan bent u bij Esmeijer Makelaardij en Taxatieburo aan het goede adres!\r\n\r\nVia deze website kunt u een taxatieaanvraag direct bij ons plaatsen. Indien u nog specifieke vragen of opmerkingen heeft, dan kunt u ons bellen op 0187 490143"
    formTitle: 'Vul een taxatieformulier in'
    formIntro: "Door onderstaand formulier in te vullen, plaatst u een taxatieaanvraag bij Esmeijer Makelaardij en Taxatieburo. Deze taxatie wordt uitgevoerd door een gecertificeerde en/of beëdigde taxateur.\r\n\r\nNa ontvangst van uw gegevens, nemen wij binnen 1 werkdag contact met u op voor het maken van een afspraak."
    methodsTitle: 'Hoe werkt Esmeijer Makelaardij en Taxatiebureau?'
    methodsText: 'Wij werken deskundig en betrouwbaar om voor u een Taxatierapport binnen 5 werkdagen klaar te hebben. Uiteraard taxeert Esmeijer Makelaardij en Taxatieburo ook bedrijfsobjecten. Bent u op zoek naar een goedkope, snelle en kwalitatieve taxateur om uw huis of bedrijfspand te laten taxeren? Dan bent u bij Esmeijer Makelaardij en Taxatieburo aan het goede adres!'
    methodsButtonText: 'Bekijk onze werkwijze'
    methodsButtonLink: /werkwijze
    servicesTitle: 'Onze diensten'
    servicesIntro: 'Bent u op zoek naar een goedkope, snelle en kwalitatieve taxateur om uw huis of bedrijfspand te laten taxeren? Dan bent u bij Esmeijer Makelaardij en Taxatieburo aan het goede adres!'
    servicesBlock1:
        title: Taxatie
        text: 'Een taxatierapport informeert de opdrachtgever over de waarde van de getaxeerde onroerende zaak. Het doel van de taxatie kan verschillen. Zo kan men een taxatie laten uitvoeren wanneer men van plan is een woning te kopen, te verbouwen of te verzekeren.'
        buttonText: 'Lees meer'
        buttonLink: /home
    servicesBlock2:
        title: Aankoopbemiddeling
        text: 'Een taxatierapport informeert de opdrachtgever over de waarde van de getaxeerde onroerende zaak. Het doel van de taxatie kan verschillen. Zo kan men een taxatie laten uitvoeren wanneer men van plan is een woning te kopen, te verbouwen of te verzekeren.'
        buttonText: 'Lees meer'
        buttonLink: /home
    backgroundImage:
        user/pages/01.home/ZhGEqAP.jpg:
            name: ZhGEqAP.jpg
            type: image/jpeg
            size: 2432343
            path: user/pages/01.home/ZhGEqAP.jpg
    methodsImage:
        user/pages/01.home/middelharniscropped.jpg:
            name: middelharniscropped.jpg
            type: image/jpeg
            size: 131299
            path: user/pages/01.home/middelharniscropped.jpg
    servicesText: 'Bent u op zoek naar een goedkope, snelle en kwalitatieve taxateur om uw huis of bedrijfspand te laten taxeren? Dan bent u bij Esmeijer Makelaardij en Taxatieburo aan het goede adres!'
    servicesBlock3:
        buttonLink: /
form:
    name: contact-form
    fields:
    -
        type: display
        size: large
        label: Instructions
        markdown: true
        content: "**Gegevens opdrachtgever**"
    -
        name: initials
        label: 'Voorletters'
        placeholder: 'Voorletters'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        validate:
            required: true
    -
       name: firstNAme
       label: 'Voornaam'
       placeholder: 'Voornaam'
       autofocus: 'off'
       autocomplete: 'on'
       type: text
       validate:
       required: true
    -
        name: lastName
        label: 'Achternaam'
        placeholder: 'Achternaam'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        validate:
        required: true
    -
        name: sex
        label: 'Geslacht'
        placeholder: 'Geslacht'
        autofocus: 'off'
        autocomplete: 'on'
        type: select
        validate:
        options:
            Man: Man
            Vrouw: Vrouw
        required: true
    -
        name: Address
        label: 'Adres'
        placeholder: 'Adres'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: true
    -
        name: postCode
        label: 'Postcode'
        placeholder: 'Postcode'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        validate:
            pattern: '^[1-9][0-9]{3} ?[A-Z]{2}$'
        required: true
    -
        name: placeOfResidence
        label: 'Woonplaats'
        placeholder: 'Woonplaats'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: true
    -
        name: officeNumber
        label: 'Telnl tijdens kantooruren'
        placeholder: 'Telnl tijdens kantooruren'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: false
    -
        name: outOfOfficeNumber
        label: 'Telnl buiten kantooruren'
        placeholder: 'Telnl buiten kantooruren'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: true
    -
        name: emailAddress
        label: 'Emailadres'
        placeholder: 'Emailadres'
        autofocus: 'off'
        autocomplete: 'on'
        type: email
        required: true
    -
        type: display
        size: large
        label: Instructions
        markdown: true
        content: "**Te taxeren object**"
    -
        name: taxationAddress
        label: 'Adres Taxatie Object'
        placeholder: 'Adres'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: true
    -
        name: taxationPostCode
        label: 'Postcode Taxatie Object'
        placeholder: 'Postcode'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: true
    -
        name: taxationPlaceOfResidence
        label: 'Woonplaats Taxatie Object'
        placeholder: 'Woonplaats'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: true
    -
        name: taxationGoal
        label: 'Doel taxatie'
        placeholder: 'Doel taxatie'
        autofocus: 'off'
        autocomplete: 'on'
        type: text
        required: true
    -
        name: renovation
        label: 'Verbouwing + verbouwingsbedrag'
        placeholder: 'Verbouwing + verbouwingsbedrag'
        autofocus: 'off'
        autocomplete: 'on'
        type: textarea
        required: false
    -
        name: objectType
        label: 'Type TaxatieObject'
        placeholder: 'Type TaxatieObject'
        type: select
        validate:
        options:
            Woonhuis: Woonhuis
            Bedrijfspand: Bedrijfspand
        required: true
    -
        name: lender
        label: 'Geldverstrekker'
        placeholder: 'Geldverstrekker'
        type: text
        required: true
    -
        name: nhg
        label: 'Heeft u een Nationale Hypotheek Garantie? (NHG)'
        type: checkbox
        required: false
    -
        name: quotationNumber
        label: 'Offertenummer/Referentienummer geldverstrekker'
        placeholder: 'Offertenummer/Referentienummer geldverstrekker'
        type: text
        required: true
    -        
        name: comments
        label: 'Overige opmerkingen'
        placeholder: 'Overige opmerkingen'
        autofocus: 'off'
        autocomplete: 'on'
        type: textarea
        required: false
    buttons:
        -
            type: submit
            value: Verstuur
        -
            type: reset
            value: Reset
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Taxatie aanvraag] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Bedankt voor het invullen van het formulier, we nemen snel contact op.'
---

