<template>
    <div class="stats-dashboard">
        <h3 class="stats-dashboard__title">Estadisticas</h3>
        <div class="stats-dashboard__stat">
            <span class="stats-dashboard__stat-number">554</span>
            <span class="stats-dashboard__stat-title">personas</span>
        </div>
        <div class="stats-dashboard__stat">
            <span class="stats-dashboard__stat-number">42</span>
            <span class="stats-dashboard__stat-title">empresas</span>
        </div>
        <div class="stats-dashboard__stat">
            <span class="stats-dashboard__stat-number">612</span>
            <span class="stats-dashboard__stat-title">vehículos</span>
        </div>
        <div class="stats-dashboard__stat">
            <span class="stats-dashboard__stat-number">8</span>
            <span class="stats-dashboard__stat-title">escuelas</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "stats-dashboard"
    }
</script>

<style scoped lang="scss">
    @import "~ed-grid";
    .stats-dashboard {
        @include edItem();
        @include edContainer;
        margin: 16px 0;
        &__title {
            @include edItem(100);
            padding: 10px;
        }
        &__stat {
            @include edItem(50);
            @include edContainer;
            padding: 0 16px 16px 16px;
            text-align: center;
        }
            &__stat-title {
                @include edItem;
                text-align: center;
            }
            &__stat-number {
                @include edItem;
                text-align: center;
                font-size: 1.5em;
            }
    }
</style>