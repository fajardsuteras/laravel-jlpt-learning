<div>
    <h1>Text Converter</h1>

    <div>
        <textarea wire:model="inputText" placeholder="Masukkan teks Anda" rows="5" class="form-control"></textarea>
    </div>

    <div>
        <select wire:model="caseType" class="form-control">
            <option value="camel">camelCase</option>
            <option value="upper">UPPER CASE</option>
            <option value="capitalized">Capitalized Case</option>
            <option value="alternating">aLtErNaTiNg cAsE</option>
            <option value="sentence">Sentence Case</option>
            <option value="lower">Lower Case</option>
            <option value="title">Title Case</option>
            <option value="inverse">InVeRsE CaSe</option>
        </select>
    </div>

    <div>
        <button wire:click="convert" class="btn btn-primary">Convert</button>
    </div>

    <div>
        <h3>Hasil:</h3>
        <p>{{ $outputText }}</p>
    </div>
</div>
