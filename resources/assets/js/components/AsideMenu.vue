<template>
    <div class="aside-menu">
        <div class="aside-menu__calendar">
            <h3 class="aside-menu__stats-title">Calendario</h3>
            <v-calendar :attributes="calendar_attrs">
            </v-calendar>
        </div>
        <stats-dashboard/>
    </div>
</template>

<script>
    import StatsDashboard from './StatsDashboard';
    export default {
        name: "aside-menu",
        components: {
            StatsDashboard
        },
        data () {
            return {
                calendar_attrs: [
                    {
                        key: 'today',
                        highlight: {
                            backgroundColor: '#ff8080'
                        },
                        dates: new Date(2018, 0, 1)
                    }
                ]
            }
        }
    }
</script>

<style scoped lang="scss">
    @import "~ed-grid";
    .aside-menu {
        @include edContainer;
        @include flexColumn;
        @include crossCenter;
        height: calc(100vh - 80px);
        width: 20%;
        max-width: 300px;
        background: lightgray;
        margin: 0;

        &__calendar {
            @include edItem();
            @include edContainer;
            margin: 16px 0;
        }
    }
</style>