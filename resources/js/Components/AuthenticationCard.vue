<template>
    <div class="min-h-screen flex flex-col sm:justify-center font-titillium items-center pt-6 sm:pt-0 bg-gradient-to-b from-green-header to-green-nav">
        <div>
            <img src="../../img/logo-pref-caruaru-branco02.png" alt="Secretaria Municipal de Saúde de Caruaru" width="230">
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot name="content"/>
        </div>
    </div>
</template>
