<header>
<div class="header bg-secondary bg-gradient d-flex justify-content-between align-items-center">
        <div class="logo ps-3">
        <img  src="../assets/logo.png" alt="logo">
        </div>
        <div class="select-fix pe-3">
            <select class="form-select"  v-model="selectGenere" @change="$emit('genSearch', selectGenere)">
                <option value="">Tutti i Generi</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>
        </div>
    </div>
</header>
