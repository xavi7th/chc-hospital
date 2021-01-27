export function filesize( size ) {
    const i = Math.floor( Math.log( size ) / Math.log( 1024 ) );
    return (
        ( size / Math.pow( 1024, i ) ).toFixed( 2 ) * 1 +
        ' ' + [ 'B', 'kB', 'MB', 'GB', 'TB' ][ i ]
    );
}

export function toFormData( values = {}, method = 'POST' ) {
    const formData = new FormData();
    for ( const field of Object.keys( values ) ) {
        formData.append( field, values[ field ] );
    }

    if ( method.toUpperCase() === 'PUT' ) {
        formData.append( '_method', 'PUT' );
    }

    return formData;
}

export function toCurrency( amount, currency = '$' ) {
    return currency + amount.toFixed( 2 )
}

export let toTitleCase = ( str ) => {
    return str.replace( /\w\S*/g, function ( txt ) {
        return txt.charAt( 0 ).toUpperCase() + txt.substr( 1 ).toLowerCase();
    } );
}

export let range = ( start, stop, step ) => {
    /**
     import {range} from './range.js';
     </script>
     {#each range(10) as v,i}
       [{i}]:{v}<br/>
     {/each}
     <hr>
     {#each range(10,0,-1) as v,i}
       [{i}]:{v}<br/>
     {/each}
     <hr>
     {#each range(3,20,2) as v,i}
       [{i}]:{v}<br/>
     {/each}
     <hr>
     {#each range(20,3,-2) as v,i}
       [{i}]:{v}<br/>
     {/each}
     **/

    if ( stop == null ) {
        stop = start;
        start = 0;
    }
    if ( !step ) {
        step = 1;
    }
    const len = ( stop - start ) / step;
    return new Proxy( {
        length: len
    }, {
        get: ( t, prop ) => {
            return prop === 'length' ? t.length :
                prop < t.length ? start + ( prop * step ) : undefined;
        }
    } );
}

export let truncateString = ( str, num, stripHtml = true ) => {
    if ( str.length <= num ) {
        if ( stripHtml ) {
            return str.replace( /(<([^>]+)>)/ig, "" )
        }
        return str
    }
    if ( stripHtml ) {
        return str.replace( /(<([^>]+)>)/ig, "" ).slice( 0, num ) + '...'
    }
    return str.slice( 0, num ) + '...'
}

export const getMonthString = (date, longMonth = false) => {
	let longMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
    "November", "December"];
	let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct",
    "Nov", "Dec"];

	if (longMonth) return longMonths[date.getMonth()];
	return months[date.getMonth()];
}

export const getDayString = (date, longDay = false) => {
	let longDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
	let days = ["Sun", "Mon", "Tue", "Wed", "Thurs", "Fri", "Sat"];

	if (longDay) return longDays[date.getDay()];
	return days[date.getDay()];
}
