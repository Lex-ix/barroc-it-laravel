@extends('master')
@section('content')

<section>
    <div class="container">
        <h2 class="subhead">Login</h2>
        <p>
            Als u in wil loggen dan moet je eerst je gebruikersnaam en wachtwoord weten, als u deze niet weet dan zou u dit aan uw manager kunnen vragen of aan een collegda.
        </p>
        <p>
            Als u uw gegevens heeft dan kan u ze invullen, als u dit gedaan heeft dan klikt u up 'submit' om in te loggen.
        </p>
    </div>
</section>

    <section>
        <div class="container">
            <h2 class="subhead">Finance</h2>
            <p>
                Op de finance start pagina ziet u alle bedrijven die actief zijn.
            </p>
            <p>
                Als u op de 'request info' knop drukt bij een bedrijf ziet u de specifieke gegeven dan het geselecteerde bedrijf.
            </p>
            <p>
                Als u daarna op de 'Insert invoice' knop drukt komt u bij een form waar u een factuur kunt toevoegen.
            </p>
            <p>
                Als u dan op 'Insert invoice' drukt word de balance automatisch geupdate.
            </p>
        </div>
    </section>

<section>
    <div class="container">
        <h2 class="subhead">Sales</h2>
        <p>
            Op de Sales startpagina kunt u alle klanten zien die schulden hebben en alle klanten die geen schulden hebben.
        </p>
        <p>
            Als u op 'add customer' drukt kunt u een klant toevoegen, vul al zijn informatie in en druk dan op 'add'.
        </p>
        <p>
            Als u op 'delete' drukt verwijderd u een klant maar niet permanent, hij word dan op inactief gezet.
        </p>
        <p>
            Als u op 'Details' drukt gaat u naar de detail pagina van het bedrijf dat u wilde zien, hier staan alle specifieke details van de klant.
        </p>
        <p>
            Op de detail pagina kunt u op 'create project' klikken, daar kunt u een form invullen met alle info en op 'create' drukken, dan komt het project op de detail pagina van het bedrijf te staan.
        </p>
        <p>
            Bij het project op de detail pagina van het bedrijf staat een 'delete' knop waarmee u het project niet permanent delete maar inactief zet.
        </p>
        <p>
            Bij het project op de detail pagina van het bedrijf staat ook een 'details' knop waarmee u naar de detail pagina van het gekozen project gaat.
        </p>
        <p>
            Op de details pagina van het project kunt u alle details van het project zien.
        </p>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="subhead">Development</h2>
        <p>
            Op de Development startpagina kunt u de statussen van de klanten zien en welke projecten op pauze staan.
        </p>
        <p>
            Als u op 'Projects' drukt kunt u alle projecten zien die in de wachtrij staan en alle actieve projecten.
        </p>
        <p>
            Als u op 'view project' drukt kunt u alle details van het gekozen project zien en deze actief zetten, als het project al actief is heeft u de mogelijkheid om hem te finishen.
        </p>
    </div>
</section>

@endsection