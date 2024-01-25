<!--
* 「flatpickr」javascriptライブラリー
* 目的の機能：日付のカレンダー表示からの日付取得
-->
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>
    flatpickr(document.getElementById('due_date'), {
        locale: 'ja',
        dateFormat: "Y/m/d",
        minDate: new Date()
    });
</script>