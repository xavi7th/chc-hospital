<script>
  import { InertiaLink } from "@inertiajs/inertia-svelte";
</script>

<div class="services_lis">
  <ul role="tablist">
    <li data-tab-name="invisalign" class:active={route().current('app.service', 'general-medicine')}>
      <InertiaLink href={route('app.service', 'general-medicine')}>
        <i class="fa fa-check" />
        General Medicine
      </InertiaLink>
    </li>
    <li data-tab-name="cardiology" class:active={route().current('app.service', 'plastic-surgery')}>
      <InertiaLink href={route('app.service', 'plastic-surgery')}>
        <i class="fa fa-check" />
        Plastic Surgery/Burns
      </InertiaLink>
    </li>
    <li data-tab-name="cosmetic" class:active={route().current('app.service', 'pharmaceutical-services')}>
      <InertiaLink href={route('app.service', 'pharmaceutical-services')}>
        <i class="fa fa-check" />
        Pharmaceutical
      </InertiaLink>
    </li>
    <li data-tab-name="neurology" class:active={route().current('app.service', 'ent-services')}>
      <InertiaLink href={route('app.service', 'ent-services')}>
        <i class="fa fa-check" />
        E.N.T Services
      </InertiaLink>
    </li>
    <li data-tab-name="whiting" class:active={route().current('app.service', 'ophthalmology')}>
      <InertiaLink href={route('app.service', 'ophthalmology')}>
        <i class="fa fa-check" />
        Ophthalmology Services
      </InertiaLink>
    </li>
    <li data-tab-name="ray" class:active={route().current('app.service', 'paediatrics')}>
      <InertiaLink href={route('app.service', 'paediatrics')}>
        <i class="fa fa-check" />
        Paediatric Clinic
      </InertiaLink>
    </li>
    <li data-tab-name="crowns" class:active={route().current('app.service', 'Obstetric')}>
      <InertiaLink href={route('app.service', 'Obstetric')}>
        <i class="fa fa-check" />
        Obstetric & Gynaecology
      </InertiaLink>
    </li>
    <li data-tab-name="implimants" class:active={route().current('app.service', 'diagnostic')}>
      <InertiaLink href={route('app.service', 'diagnostic')}>
        <i class="fa fa-check" />
        Diagnostic Services
      </InertiaLink>
    </li>
    <li data-tab-name="invisalign" class:active={route().current('app.service', 'medical-certification')}>
      <InertiaLink href={route('app.service', 'medical-certification')}>
        <i class="fa fa-check" />
        Medical Certification
      </InertiaLink>
    </li>
    <li data-tab-name="cardiology" class:active={route().current('app.service', 'vaccination')}>
      <InertiaLink href={route('app.service', 'vaccination')}>
        <i class="fa fa-check" />
        Vaccinations
      </InertiaLink>
    </li>
    <li data-tab-name="cosmetic" class:active={route().current('app.service', 'audiological-evaluation')}>
      <InertiaLink href={route('app.service', 'audiological-evaluation')}>
        <i class="fa fa-check" />
        Audiology
      </InertiaLink>
    </li>
    <li data-tab-name="neurology" class:active={route().current('app.service', 'dermatology-clinic')}>
      <InertiaLink href={route('app.service', 'dermatology-clinic')}>
        <i class="fa fa-check" />
        Dermatology Clinic
      </InertiaLink>
    </li>
    <li data-tab-name="whiting" class:active={route().current('app.service', 'dental-services')}>
      <InertiaLink href={route('app.service', 'dental-services')}>
        <i class="fa fa-check" />
        Dental Services
      </InertiaLink>
    </li>
    <li data-tab-name="ray" class:active={route().current('app.service', 'dietetic-services')}>
      <InertiaLink href={route('app.service', 'dietetic-services')}>
        <i class="fa fa-check" />
        Dietetic Services
      </InertiaLink>
    </li>
    <li data-tab-name="crowns" class:active={route().current('app.service', 'laboratory')}>
      <InertiaLink href={route('app.service', 'laboratory')}>
        <i class="fa fa-check" />
        Laboratory Services
      </InertiaLink>
    </li>
    <li data-tab-name="implimants" class:active={route().current('app.service', 'spirometry')}>
      <InertiaLink href={route('app.service', 'spirometry')}>
        <i class="fa fa-check" />
        Spirometry
      </InertiaLink>
    </li>
    <li data-tab-name="invisalign" class:active={route().current('app.service', 'emergency-care')}>
      <InertiaLink href={route('app.service', 'emergency-care')}>
        <i class="fa fa-check" />
        Emergency Care
      </InertiaLink>
    </li>
    <li data-tab-name="cardiology" class:active={route().current('app.service', 'intensive-care')}>
      <InertiaLink href={route('app.service', 'intensive-care')}>
        <i class="fa fa-check" />
        Intensive Care Unit
      </InertiaLink>
    </li>
    <li data-tab-name="cosmetic" class:active={route().current('app.service', 'neonatology')}>
      <InertiaLink href={route('app.service', 'neonatology')}>
        <i class="fa fa-check" />
        Neonatology
      </InertiaLink>
    </li>
    <li data-tab-name="neurology" class:active={route().current('app.service', 'dialysis')}>
      <InertiaLink href={route('app.service', 'dialysis')}>
        <i class="fa fa-check" />
        Dialysis
      </InertiaLink>
    </li>
    <li data-tab-name="whiting" class:active={route().current('app.service', 'high-dependency-care')}>
      <InertiaLink href={route('app.service', 'high-dependency-care')}>
        <i class="fa fa-check" />
        High Dependency Care
      </InertiaLink>
    </li>
    <li data-tab-name="ray" class:active={route().current('app.service', 'surgery')}>
      <InertiaLink href={route('app.service', 'surgery')}>
        <i class="fa fa-check" />
        Surgery
      </InertiaLink>
    </li>
    <li data-tab-name="crowns" class:active={route().current('app.service', 'health-insurance')}>
      <InertiaLink href={route('app.service', 'health-insurance')}>
        <i class="fa fa-check" />
        Health Insurance Scheme
      </InertiaLink>
    </li>
    <li data-tab-name="implimants" class:active={route().current('app.service', 'radiological-services')}>
      <InertiaLink href={route('app.service', 'radiological-services')}>
        <i class="fa fa-check" />
        Radiological Services
      </InertiaLink>
    </li>
    <li data-tab-name="neurology" class:active={route().current('app.service', 'private-insurance')}>
      <InertiaLink href={route('app.service', 'private-insurance')}>
        <i class="fa fa-check" />
        Private Insurance Scheme
      </InertiaLink>
    </li>
    <li data-tab-name="whiting" class:active={route().current('app.service', 'hearing-conservation')}>
      <InertiaLink href={route('app.service', 'hearing-conservation')}>
        <i class="fa fa-check" />
        Hearing Conservation
      </InertiaLink>
    </li>
    <li data-tab-name="ray" class:active={route().current('app.service', 'hospital-services')}>
      <InertiaLink href={route('app.service', 'hospital-services')}>
        <i class="fa fa-check" />
        Hospital Services
      </InertiaLink>
    </li>
    <li data-tab-name="crowns" class:active={route().current('app.service', 'neurology')}>
      <InertiaLink href={route('app.service', 'neurology')}>
        <i class="fa fa-check" />
        Neurology
      </InertiaLink>
    </li>

    <li data-tab-name="whiting" class:active={route().current('app.service', 'occupational-health')}>
      <InertiaLink href={route('app.service', 'occupational-health')}>
        <i class="fa fa-check" />
        Occupational Health(OH)
      </InertiaLink>
    </li>
    <li data-tab-name="implimants" class:active={route().current('app.service', 'specialist-consultations')}>
      <InertiaLink href={route('app.service', 'specialist-consultations')}>
        <i class="fa fa-check" />
        Specialist Consultations
      </InertiaLink>
    </li>
  </ul>
</div>
