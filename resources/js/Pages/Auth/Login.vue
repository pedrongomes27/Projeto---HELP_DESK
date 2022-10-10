<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import JetAuthenticationCard from '@/Components/AuthenticationCard.vue';
import JetAuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import JetButton from '@/Components/Button.vue';
import JetInput from '@/Components/Input.vue';
import JetInputError from '@/Components/InputError.vue';
import JetCheckbox from '@/Components/Checkbox.vue';
import JetLabel from '@/Components/Label.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <JetAuthenticationCard>

        <template #content>
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>
    
            <form @submit.prevent="submit">
                <div>
                    <JetLabel for="email" value="Email" />
                    <JetInput
                        id="email"
                        v-model="form.email"
                        type="email"
                        class="mt-1 block w-full"
                        required
                        autofocus
                    />
                    <JetInputError class="mt-2" :message="form.errors.email" />
                </div>
    
                <div class="mt-4">
                    <JetLabel for="password" value="Password" />
                    <JetInput
                        id="password"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-full"
                        required
                        autocomplete="current-password"
                    />
                    <JetInputError class="mt-2" :message="form.errors.password" />
                </div>
    
                <div class="flex justify-between mt-4 ">
                    <label class="flex items-center">
                        <JetCheckbox v-model:checked="form.remember" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">Lembrar de mim</span>
                    </label>
                    <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Esqueceu sua senha?
                    </Link>
                    
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <Link :href="route('register')" class="underline text-right text-sm text-gray-600 hover:text-gray-900">
                        Não possui uma conta?
                    </Link>
    
                    <JetButton class="ml-4 text-white bg-green-header hover:bg-green-nav" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Log in
                    </JetButton>
                </div>
            </form>
        </template>
    </JetAuthenticationCard>
</template>
